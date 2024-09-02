<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourPackage;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $targetUserID = $user->id;

        // Step 1: Normalize the Ratings
        $ratings = Rating::all()->groupBy('user_id');
        $normalizedRatings = [];

        foreach ($ratings as $userId => $userRatings) {
            $meanRating = $userRatings->avg('rating');
            foreach ($userRatings as $rating) {
                if (!isset($normalizedRatings[$userId])) {
                    $normalizedRatings[$userId] = []; // Initialize array if not set
                }
                $normalizedRatings[$userId][$rating->package_id] = $rating->rating - $meanRating;
            }
        }

        // Check if the target user has any normalized ratings
        if (!isset($normalizedRatings[$targetUserID])) {
            $packages =  TourPackage::with('ratings')
                            ->withAvg('ratings', 'rating')
                            ->orderByDesc('ratings_avg_rating')
                            ->take(10)
                            ->get();
            return view('dashboard', compact('packages'));
        }

        // Step 2: Compute Similarity Scores (Cosine Similarity)
        $similarityScores = [];
        foreach ($normalizedRatings as $userId => $userRatings) {
            if ($userId != $targetUserID) {
                $similarityScores[$userId] = $this->cosineSimilarity(
                    $normalizedRatings[$targetUserID],
                    $userRatings
                );
            }
        }

        // Step 3: Identify Top-N Similar Users
        $N = 10; // Define N, the number of similar users
        arsort($similarityScores);
        $topNSimilarUsers = array_slice($similarityScores, 0, $N, true);

        // Step 4: Calculate Weighted Sum for Predicted Ratings
        $predictedRatings = [];
        foreach ($normalizedRatings as $userId => $userRatings) {
            if (isset($topNSimilarUsers[$userId])) {
                foreach ($userRatings as $packageId => $rating) {
                    if (!isset($normalizedRatings[$targetUserID][$packageId])) {
                        if (!isset($predictedRatings[$packageId])) {
                            $predictedRatings[$packageId] = 0;
                        }
                        $predictedRatings[$packageId] += $similarityScores[$userId] * $rating;
                    }
                }
            }
        }

        // Step 5: Generate Recommendations
        arsort($predictedRatings);
        $topK = array_keys(array_slice($predictedRatings, 0, 10, true)); // Top 10 recommendations
        $packages =  TourPackage::with('ratings')
        ->withAvg('ratings', 'rating')
        ->orderByDesc('ratings_avg_rating')
        ->take(10)
        ->get();

        return view('dashboard', compact('packages'));

    }

    private function cosineSimilarity($userRatingsA, $userRatingsB)
    {
        $dotProduct = 0;
        $magnitudeA = 0;
        $magnitudeB = 0;

        foreach ($userRatingsA as $packageId => $ratingA) {
            if (isset($userRatingsB[$packageId])) {
                $ratingB = $userRatingsB[$packageId];
                $dotProduct += $ratingA * $ratingB;
                $magnitudeA += pow($ratingA, 2);
                $magnitudeB += pow($ratingB, 2);
            }
        }

        $magnitudeA = sqrt($magnitudeA);
        $magnitudeB = sqrt($magnitudeB);

        if ($magnitudeA * $magnitudeB == 0) {
            return 0; // Prevent division by zero
        }

        return $dotProduct / ($magnitudeA * $magnitudeB);
    }
}

<div class="container">
    <h2>{{ $hotel->name }}</h2>
    <img src="{{ asset('storage/' . $hotel->image) }}" class="img-fluid mb-4" alt="{{ $hotel->name }}">
    <p><strong>Location:</strong> {{ $hotel->location }}</p>
    <p><strong>Description:</strong> {{ $hotel->description }}</p>
    <p><strong>Price per night:</strong> NGN{{ $hotel->price_per_night }}</p>
    <p><strong>Description:</strong> {{$hotel->description}}</p>
    <h3>Book this Hotel</h3>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="book">
        <div class="form-group">
            <label for="comment">Comments</label>
            <textarea id="comment" wire:model="comment" class="form-control @error('comment') is-invalid @enderror" placeholder="Add any comments..."></textarea>
            @error('comment') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>
        @auth
        <li class="spe" align="center">
            <button type="submit" name="submit2" class="btn-primary btn">Book</button>
        </li>
        @else
        <li align="center" style="margin-top: 1%">
            <a href="#" data-toggle="modal" data-target="#myModal4" class="btn-primary btn">Book</a>
        </li>
        @endauth
    </form>
</div>

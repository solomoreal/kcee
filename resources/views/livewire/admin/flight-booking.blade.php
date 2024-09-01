
        <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Flight Bookings</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active" aria-current="page">Flight Bookings</li>
              </ol>
            </div>

            <div class="row">
              <div class="col-lg-12">

                <div class="card mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Flight Booking Requests</h6>

                  </div>
                  <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Flight Number</th>
                                <th>Start At</th>
                                <th>End At</th>
                                <th>Departure</th>
                                <th>Destination</th>
                                <th>Seat Class</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($flight_bookings as $booking)
                                <tr>
                                    <td>{{ $booking->id }}</td>
                                    <td>{{ $booking->user->email }}</td>
                                    <td>{{ $booking->flightDetail->flight_number }}</td>
                                    <td>{{ $booking->flightDetail->departure_time }}</td>
                                    <td>{{ $booking->flightDetail->arrival_time }}</td>
                                    <td>{{ $booking->flightDetail->departure }}</td>
                                    <td>{{ $booking->flightDetail->destination }}</td>
                                    <td>{{ $booking->flightDetail->seat_class }}</td>
                                    <td>{{ $booking->status }}</td>
                                    {{-- <td>
                                        <button wire:click="approve({{ $booking->id }})" class="btn btn-success btn-sm">Approve</button>
                                        <button wire:click="decline({{ $booking->id }})" class="btn btn-danger btn-sm">Decline</button>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Pagination links -->
                    {{ $flight_bookings->links() }}

                </div>
              </div>
              </div>
            </div>
          </div>

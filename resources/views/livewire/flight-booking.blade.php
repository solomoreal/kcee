<div class="container mt-5">
    <h3 class="mb-4 text-center">Available Flights</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Flight Number</th>
                    <th>Departure</th>
                    <th>Destination</th>
                    <th>Departure Time</th>
                    <th>Arrival Time</th>
                    <th>Price</th>
                    <th>Seat Class</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($availableFlights as $flight)
                @auth
                    @php
                        $exists = $flight->flightBookings()->where('user_id', auth()->user()->id)->exists();
                    @endphp
                @else
                    @php
                        $exists = false;
                    @endphp
                @endauth

                <tr>
                    <td>{{ $flight->flight_number }}</td>
                    <td>{{ $flight->departure }}</td>
                    <td>{{ $flight->destination }}</td>
                    <td>{{ $flight->departure_time }}</td>
                    <td>{{ $flight->arrival_time }}</td>
                    <td>{{ $flight->price }}</td>
                    <td>{{ $flight->seat_class }}</td>
                    @auth
                    <td>
                        @if(!$exists)
                        <button class="btn btn-primary btn-sm" wire:click="bookFlight({{ $flight->id }})">Book</button>
                        @else
                        <button class="btn btn-primary btn-sm" wire:click="cancelFlight({{ $flight->id }})">Cancel</button>
                        @endif
                    </td>
                    @endauth
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if(session()->has('message'))
        <div class="alert alert-success mt-4">
            {{ session('message') }}
        </div>
    @endif
</div>

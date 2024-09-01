
<div>
    <form wire:submit.prevent="{{ $editing ? 'updateFlight' : 'submit' }}">
        <div class="form-group">
            <label for="flight_number">Flight Number</label>
            <input type="text" id="flight_number" wire:model="flight_number" class="form-control">
        </div>
        <div class="form-group">
            <label for="departure">Departure</label>
            <input type="text" id="departure" wire:model="departure" class="form-control">
        </div>
        <div class="form-group">
            <label for="destination">Destination</label>
            <input type="text" id="destination" wire:model="destination" class="form-control">
        </div>
        <div class="form-group">
            <label for="departure_time">Departure Time</label>
            <input type="datetime-local" id="departure_time" wire:model="departure_time" class="form-control">
        </div>
        <div class="form-group">
            <label for="arrival_time">Arrival Time</label>
            <input type="datetime-local" id="arrival_time" wire:model="arrival_time" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" id="price" wire:model="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="seat_class">Seat Class</label>
            <select id="seat_class" wire:model="seat_class" class="form-control" >
                <option @readonly(true)> select class</option>
                <option value="first class"> First Class</option>
                <option value="economy class"> Economy Class</option>
                <option value="business class"> Business Class</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">{{ $editing ? 'Update Flight' : 'Add Flight' }}</button>
    </form>

    @if (session()->has('message'))
        <div class="alert alert-success text-primary">{{ session('message') }}</div>
    @endif

    <h3 class="mt-4">Available Flights</h3>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Flight Number</th>
                <th>Departure</th>
                <th>Destination</th>
                <th>Departure Time</th>
                <th>Arrival Time</th>
                <th>Price</th>
                <th>Seat Class</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($flights as $flight)
                <tr>
                    <td>{{ $flight->flight_number }}</td>
                    <td>{{ $flight->departure }}</td>
                    <td>{{ $flight->destination }}</td>
                    <td>{{ $flight->departure_time }}</td>
                    <td>{{ $flight->arrival_time }}</td>
                    <td>${{ $flight->price }}</td>
                    <td>{{ $flight->seat_class }}</td>
                    <td>
                        <button wire:click="editFlight({{ $flight->id }})" class="btn btn-sm btn-info">Edit</button>
                        <button wire:click="deleteFlight({{ $flight->id }})" class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $flights->links() }}
</div>

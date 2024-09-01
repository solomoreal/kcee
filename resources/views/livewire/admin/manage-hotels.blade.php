<div class="container mt-5">
    <h2 class="mb-4">Manage Hotels</h2>
    <form wire:submit.prevent="{{ $updateMode ? 'update' : 'store' }}">
        <div class="mb-3">
            <label for="hotelName" class="form-label">Hotel Name</label>
            <input type="text" id="hotelName" class="form-control @error('name') is-invalid @enderror" wire:model="name" placeholder="Hotel Name">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" id="location" class="form-control @error('location') is-invalid @enderror" wire:model="location" placeholder="Location">
            @error('location')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" class="form-control @error('description') is-invalid @enderror" wire:model="description" placeholder="Description"></textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="pricePerNight" class="form-label">Price per Night</label>
            <input type="text" id="pricePerNight" class="form-control @error('price_per_night') is-invalid @enderror" wire:model="price_per_night" placeholder="Price per Night">
            @error('price_per_night')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control @error('status') is-invalid @enderror"" id="status" wire:model="status" required>
                <option value="available">Available</option>
                <option value="unavailable">Unavailable</option>
            </select>
            @error('status')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="room_image">Room Image</label>
            <input type="file" class="form-control-file" id="room_image" wire:model="image" accept="image/*" >
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        @if (session()->has('message'))
            <div class="alert alert-success text-primary">{{ session('message') }}</div>
        @endif
        <button type="submit" class="btn btn-primary">{{ $updateMode ? 'Update' : 'Create' }}</button>
    </form>

    <table class="table mt-5">
        <thead class="table-light">
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Description</th>
                <th>Price per Night</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hotels as $hotel)
                <tr>
                    <td>{{ $hotel->name }}</td>
                    <td>{{ $hotel->location }}</td>
                    <td>{{ $hotel->description }}</td>
                    <td>{{ $hotel->price_per_night }}</td>
                    <td>{{ $hotel->status }}</td>
                    <td>
                        <button class="btn btn-sm btn-warning" wire:click="edit({{ $hotel->id }})">Edit</button>
                        <button class="btn btn-sm btn-danger" wire:click="delete({{ $hotel->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

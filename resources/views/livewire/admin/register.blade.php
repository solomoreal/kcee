<div>
    <form wire:submit.prevent="register">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" wire:model="email" required>
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" wire:model="password" required>
            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="staff_id">Staff ID</label>
            <input type="text" class="form-control" id="staff_id" wire:model="staff_id" required>
            @error('staff_id') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" id="name" wire:model="name" required>
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="user_name">Username</label>
            <input type="text" class="form-control" id="user_name" wire:model="user_name" required>
            @error('user_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" id="first_name" wire:model="first_name" required>
            @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="last_name" wire:model="last_name" required>
            @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" wire:model="phone_number" required>
            @error('phone_number') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="photo">Photo (optional)</label>
            <input type="file" class="form-control" id="photo" wire:model="photo">
            @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>

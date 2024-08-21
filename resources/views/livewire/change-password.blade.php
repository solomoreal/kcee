<form wire:submit.prevent="changePassword">

    <p style="width: 350px;">
        <b>Current Password</b>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Current Password" wire:model="password">
        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
    </p>

    <p style="width: 350px;">
        <b>New Password</b>
        <input type="password" class="form-control" id="newpassword" placeholder="New Password" wire:model="newpassword">
        @error('newpassword') <span class="text-danger">{{ $message }}</span> @enderror
    </p>

    <p style="width: 350px;">
        <b>Confirm Password</b>
        <input type="password" class="form-control" id="confirmpassword" placeholder="Confirm Password" wire:model="confirmpassword">
        @error('confirmpassword') <span class="text-danger">{{ $message }}</span> @enderror
    </p>

    <p style="width: 350px;">
        <button type="submit" name="submit5" class="btn-primary btn">Change</button>
    </p>

    @if (session()->has('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif

    @if (session()->has('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

</form>

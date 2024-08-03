<form wire:submit.prevent="updateProfile" >

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <p style="width: 350px;">

      <b>Name</b>
        <input type="text" id="name" wire:model="name" class="form-control">
        @error('name') <span class="error">{{ $message }}</span> @enderror
    </p>

    <p style="width: 350px;">
      <b>Mobile Number</b>
        <input type="text" id="phone_number" wire:model="phone_number" class="form-control">
        @error('email') <span class="error">{{ $message }}</span> @enderror
    </p>

    <p style="width: 350px;">
      <b>Email Id</b>
        <input type="email" id="email" wire:model="email" class="form-control">
        @error('email') <span class="error">{{ $message }}</span> @enderror

    </p>
    <p style="width: 350px;">
      <b>Last Updation Date : {{$user->updated_at}} </b>

    </p>

    <p style="width: 350px;">
      <b>Reg Date : {{$user->created_at}}</b>

    </p>

<p style="width: 350px;">
  <button type="submit" class="btn-primary btn">Update</button>
</p>
</form>


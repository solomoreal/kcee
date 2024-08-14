        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tour Guide</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Tour Guide</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Add Tour Guide</h6>

                </div>
                <div class="card-body">
                    <form wire:submit.prevent="save">
                        <input type="hidden" wire:model="selected_id">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" wire:model="name">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" class="form-control" id="type" wire:model="type">
                            @error('type') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location" wire:model="location">
                            @error('location') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" wire:model="price" step="0.01">
                            @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="features" class="form-label">Features</label>
                            <textarea class="form-control" id="features" wire:model="features"></textarea>
                            @error('features') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="details" class="form-label">Details</label>
                            <textarea class="form-control" id="details" wire:model="details"></textarea>
                            @error('details') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>

                    <!-- List of Tour Guides -->
                    <table class="table mt-4">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Location</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tourGuides as $tourGuide)
                                <tr>
                                    <td>{{ $tourGuide->name }}</td>
                                    <td>{{ $tourGuide->type }}</td>
                                    <td>{{ $tourGuide->location }}</td>
                                    <td>{{ $tourGuide->price }}</td>
                                    <td>
                                        <button wire:click="edit({{ $tourGuide->id }})" class="btn btn-warning btn-sm">Edit</button>
                                        <button wire:click="delete({{ $tourGuide->id }})" class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
              </div>
            </div>
            </div>
          </div>
        </div>

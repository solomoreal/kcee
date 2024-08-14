        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Tour Package</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active" aria-current="page">Package</li>
              </ol>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <!-- Form Basic -->
                <div class="card mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add Tour Package</h6>

                  </div>
                  <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif

                    <form wire:submit.prevent="{{ $editMode ? 'updatePackage' : 'createPackage' }}" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="name" class="form-label">Package Name</label>
                            <input type="text" wire:model="name" id="name" class="form-control" placeholder="Enter Package Name" required>
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" wire:model="type" id="type" class="form-control" placeholder="Enter Type" required>
                        </div>

                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" wire:model="location" id="location" class="form-control" placeholder="Enter Location" required>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" wire:model="price" id="price" class="form-control" placeholder="Enter Price" required>
                        </div>

                        <div class="mb-3">
                            <label for="features" class="form-label">Features</label>
                            <textarea wire:model="features" id="features" class="form-control" placeholder="Enter Features"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="details" class="form-label">Details</label>
                            <textarea wire:model="details" id="details" class="form-control" placeholder="Enter Details"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" wire:model="image" id="image" class="form-control">
                            @if ($image)
                                <img src="{{ $image->temporaryUrl() }}" class="img-thumbnail mt-3" alt="Image Preview" width="150">
                            @elseif($editMode && $selectedPackage->image)
                                <img src="{{ asset('storage/' . $selectedPackage->image) }}" class="img-thumbnail mt-3" alt="Current Image" width="150">
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">{{ $editMode ? 'Update' : 'Create' }} Package</button>
                    </form>

            <hr>

            <h3 class="mb-3">All Packages</h3>

            <table class="table table-striped">
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
                    
                    @forelse ($packages as $package)
                        <tr>
                            <td>{{ $package->name }}</td>
                            <td>{{ $package->type }}</td>
                            <td>{{ $package->location }}</td>
                            <td>{{ $package->price }}</td>
                            <td>
                                <button wire:click="editPackage({{ $package->id }})" class="btn btn-sm btn-warning">Edit</button>
                                <button wire:click="deletePackage({{ $package->id }})" class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                        @empty
                        <p>You have no Packages</p>
                    @endforelse
                </tbody>
            </table>
                </div>
              </div>
              </div>
            </div>
          </div>

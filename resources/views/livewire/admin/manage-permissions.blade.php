<div>

    <form wire:submit.prevent="addPermission" class="mb-4">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="form-group">
            <label for="adminId">Admin</label>
            <select id="adminId" wire:model="adminId" class="form-control">
                <option value="">Select Admin</option>
                @foreach($admins as $admin)
                    <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                @endforeach
            </select>
            @error('adminId') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group form-check">
            <input type="checkbox" id="create" wire:model="create" class="form-check-input">
            <label for="create" class="form-check-label">Create</label>
            @error('create') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group form-check">
            <input type="checkbox" id="update" wire:model="update" class="form-check-input">
            <label for="update" class="form-check-label">Update</label>
            @error('update') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Add Permission</button>
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Admin</th>
                <th>Create</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            @foreach($permissions as $permission)
                <tr>
                    <td>{{ $permission->admin->name }}</td>
                    <td>{{ $permission->create ? 'Yes' : 'No' }}</td>
                    <td>{{ $permission->update ? 'Yes' : 'No' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


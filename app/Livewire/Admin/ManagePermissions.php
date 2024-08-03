<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Permission;
use App\Models\Admin;

class ManagePermissions extends Component
{
    public $permissions;
    public $adminId;
    public $create;
    public $update;

    public function mount()
    {
        $this->permissions = Permission::all();
    }

    public function addPermission()
    {
        $this->validate([
            'adminId' => 'required|exists:admins,id',
            'create' => 'required|boolean',
            'update' => 'required|boolean',
        ]);

        Permission::create([
            'admin_id' => $this->adminId,
            'create' => $this->create,
            'update' => $this->update,
        ]);

        session()->flash('message', 'Permission added successfully.');
        $this->permissions = Permission::all();
    }

    public function render()
    {
        return view('livewire.admin.manage-permissions', [
            'admins' => Admin::all(),
        ]);
    }

}

<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class ManageUsers extends Component
{
    use WithPagination;

    public $perPage = 10;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $users = User::orderBy('created_at', 'desc')->paginate($this->perPage);

        return view('livewire.admin.manage-users', [
            'users' => $users,
        ]);
    }
}

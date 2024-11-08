<?php
namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserDatatable extends Component
{
    use WithPagination;

    public $search = '';  
    public $role = '';    
    public $perPage = 10;

    protected $queryString = ['search', 'role'];

    public function render()
    {
        $query = User::query();

        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        if ($this->role) {
            $query->whereHas('roles', function ($query) {
                $query->where('name', $this->role);
            });
        }

        $users = $query->paginate($this->perPage);
        $roles = Role::all();

        return view('livewire.user-datatable', compact('users', 'roles'));
    }
}

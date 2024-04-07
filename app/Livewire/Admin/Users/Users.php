<?php

namespace App\Livewire\Admin\Users;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{

    use WithPagination;
    public $permissions;
    public ?User $user = null;
    public UserForm $form;
    public $delete_id;
    public $perPage = 10;
    public $search = '';
    public $sortField = 'username';
    public $sortDirection = 'ASC';

    #[On('deleteConfirmed')]
    public function deleteUser()
    {
        $user = User::find($this->delete_id);
        $user->delete();
        $this->dispatch('resourceDeleted');
    }
    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatch('show-delete-confirmation');
    }
    public function doSort($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = ($this->sortDirection === 'ASC') ? 'DESC' : 'ASC';
            return;
        }
        $this->sortField = $field;
        $this->sortDirection = 'ASC';
    }
    //lifecyle hook
    public function updatedPerPage()
    {
        $this->resetPage();
    }
    public function updatedSearch()
    {
        $this->resetPage();
    }

    #[On('refresh-list')]
    public function render()
    {
        $users = User::withoutSuperAdmin()->latest()->where('username', 'like', '%' . $this->search . '%')
            ->orderBy($this->sortField, $this->sortDirection)->paginate($this->perPage);
        return view('livewire.admin.users.users', [
            'users' => $users,
        ]);
    }
}

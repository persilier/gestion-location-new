<?php

namespace App\Livewire\Admin\Roles;

use App\Livewire\Forms\RoleForm;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Roles extends Component
{
    use WithPagination;

    public $delete_id;
    public $event = 'create-role';
    public $title = 'Create Role';
    public ?Role $role = null;
    public RoleForm $form;
    public $perPage = 10;
    public $search = '';
    public $sortField = 'name';
    public $sortDirection = 'ASC';

    #[On('deleteConfirmed')]
    public function deleteRole()
    {
        $role = Role::find($this->delete_id);
        $role->delete();
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
    public function saveRole()
    {
        $this->form->saveRole();
        $this->closeModal();
        $this->dispatch('refresh-list');
    }
    public function render()
    {
        return view('livewire.admin.roles.roles', [
            'roles' => Role::whereNotIn('name', ['admin'])->where('name', 'like', '%' . $this->search . '%')
                ->orderBy($this->sortField, $this->sortDirection)
                ->paginate($this->perPage),
        ]);
    }
}

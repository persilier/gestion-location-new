<?php

namespace App\Livewire\Admin\Permissions;

use App\Livewire\Forms\PermissionForm;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Permission;

class Permissions extends Component
{
    use WithPagination;

    public $delete_id;
    public ?Permission $permission = null;
    public PermissionForm $form;
    public $perPage = 10;
    public $search = '';
    public $sortField = 'name';
    public $sortDirection = 'ASC';

    #[On('deleteConfirmed')]
    public function deletePermission()
    {
        $role = Permission::find($this->delete_id);
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
    public function savePermission()
    {
        $this->form->savePermission();
        $this->closeModal();
        $this->dispatch('refresh-list');
    }
    public function render()
    {
        return view('livewire.admin.permissions.permissions', [
            'permissions' => Permission::where('name', 'like', '%' . $this->search . '%')
                ->orderBy($this->sortField, $this->sortDirection)
                ->paginate($this->perPage),
        ]);
    }
}

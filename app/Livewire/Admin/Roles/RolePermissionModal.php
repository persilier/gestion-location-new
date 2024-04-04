<?php

namespace App\Livewire\Admin\Roles;

use App\Livewire\Forms\RolePermisionForm;
use Livewire\Attributes\On;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionModal extends ModalComponent
{
    public $permissions;
    public ?Role $role = null;
    public RolePermisionForm $form;


    public function mount(Role $role = null): void
    {
        $this->role = $role;
    }

    public function saveRole()
    {
        $this->form->saveRole();
        $this->closeModal();
        $this->dispatch('refresh-list');
    }

    public function render()
    {
        $this->permissions = Permission::all();
        return view('livewire.admin.roles.role-permission-modal', ['permissions' => $this->permissions, 'role' => $this->role]);
    }
}

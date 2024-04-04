<?php

namespace App\Livewire\Admin\Roles;

use App\Livewire\Forms\RoleForm;
use Livewire\Attributes\On;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use Spatie\Permission\Models\Role;

class RoleModal extends ModalComponent
{
    public ?Role $role = null;
    public RoleForm $form;


    public function mount(Role $role = null): void
    {
        if ($role && $role->exists) {
            $this->form->setRole($role);
        }
    }

    public function saveRole()
    {
        $this->form->saveRole();
        $this->closeModal();
        $this->dispatch('refresh-list');
    }
    public function render()
    {
        return view('livewire.admin.roles.role-modal');
    }
    public static function modalMaxWidth(): string
    {
        return '2xl';
    }
}

<?php

namespace App\Livewire\Admin\Permissions;

use Livewire\Component;
use App\Livewire\Forms\PermissionForm;
use LivewireUI\Modal\ModalComponent;
use Spatie\Permission\Models\Permission;

class PermissionModal extends ModalComponent
{
    public ?Permission $permission = null;
    public PermissionForm $form;


    public function mount(Permission $permission = null): void
    {
        if ($permission && $permission->exists) {
            $this->form->setPermission($permission);
        }
    }

    public function savePermission()
    {
        $this->form->savePermission();
        $this->closeModal();
        $this->dispatch('refresh-list');
    }
    public function render()
    {
        return view('livewire.admin.permissions.permission-modal');
    }
    public static function modalMaxWidth(): string
    {
        return '2xl';
    }
}

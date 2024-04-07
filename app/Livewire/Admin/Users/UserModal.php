<?php

namespace App\Livewire\Admin\Users;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;
use Spatie\Permission\Models\Role;

class UserModal extends ModalComponent
{
    use WithFileUploads;
    public $photo;
    public ?User $user = null;
    public $roles;

    public UserForm $form;

    public function mount(User $user = null): void
    {
        if ($user && $user->exists) {
            $this->form->edit;
            $this->form->setUser($user);
        }
    }
    public function saveUser(): void
    {

        $this->form->saveUser();
        $this->closeModal();
        $this->dispatch('refresh-list');
    }
    public function render()
    {
        $this->roles = Role::whereNotIn('name', ['admin'])->get();
        return view('livewire.admin.users.user-modal', ['roles' => $this->roles, 'form' => $this->form]);
    }
    public static function modalMaxWidth(): string
    {
        return '5xl';
    }
}

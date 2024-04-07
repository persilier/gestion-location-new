<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserShowModal extends ModalComponent
{
    public $user;
    public $permission;
    public $role;
    public $roles;
    public $permissions;
    public function mount(User $user = null): void
    {
        $this->user = $user;
    }
    public function givePermission()
    {
        if ($this->user->hasPermissionTo($this->permission)) {
            return back()->with('error', 'l\'utilisatuer a deja cette permission');
        }
        $this->user->givePermissionTo($this->permission);
        session()->flash('success', 'Permission assignée à l\'utilisatuer avec succès');
        //return back()->with('success', 'Permission assignée à l\'utilisatuer avec succès');
    }
    public function assignRole()
    {
        //dd($this->role);
        if ($this->user->hasRole($this->role)) {
            return back()->with('error', 'Utilisateur possède deja ce rôle');
        }
        $this->user->syncRoles([$this->role]);
        session()->flash('success', 'Role attribué à l\'utilisateur avec suxccès');
        //return back()->with('success', 'Role attribué à l\'utilisateur avec suxccès');
    }
    public function revokePermission()
    {
        if ($this->user->hasPermissionTo($this->permission)) {
            $this->user->revokePermissionTo($this->permission);
            return back()->with('success', 'Permission revoked successfully');
        }
        return back()->with('error', 'Permission not found');
    }
    public function render()
    {
        $this->permissions = Permission::all();
        $this->roles = Role::whereNotIn('name', ['admin'])->get();
        return view('livewire.admin.users.user-show-modal', ['permissions' => $this->permissions, 'roles' => $this->roles]);
    }
}

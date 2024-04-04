<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Spatie\Permission\Models\Role;

class RoleForm extends Form
{
    public ?Role $role = null;
    public $name = '';

    public function setRole(?Role $role = null): void
    {
        $this->role = $role;
        $this->name = $role->name;
    }


    public function saveRole()
    {
        $this->validate();
        if (!$this->role) {
            Role::create($this->only(['name']));
            return redirect()->route('admin.roles.index')->with('success', 'Role successfully created!');
        } else {
            $this->role->update($this->only(['name']));
            return redirect()->route('admin.roles.index')->with('success', 'Role successfully updated!');
        }
        $this->reset();
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:4'],
        ];
    }
}

<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Spatie\Permission\Models\Permission;

class PermissionForm extends Form
{
    public ?Permission $permission = null;
    public $name = '';

    public function setPermission(?Permission $permission = null): void
    {
        $this->permission = $permission;
        $this->name = $permission->name;
    }


    public function savePermission()
    {
        $this->validate();
        if (!$this->permission) {
            Permission::create($this->only(['name']));
            return redirect()->route('admin.permissions.index')->with('success', 'Permission successfully created!');
        } else {
            $this->permission->update($this->only(['name']));
            return redirect()->route('admin.permissions.index')->with('success', 'Permission successfully updated!');
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

<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserForm extends Form
{
    public ?User $user = null;
    public $edit = false;
    public $username = "";
    public $email = "";
    public $password = "";
    public $password_confirmation = "";
    public $tel = "";
    public $adresse = "";
    public $nom = "";
    public $photo = "";
    public $prenom = "";
    public $role = "";
    public $statut = '';


    public function setUser(?User $user = null): void
    {
        $this->user = $user;
        $this->username = $user->username;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->password_confirmation = $user->password;
        $this->tel = $user->tel;
        $this->adresse = $user->adresse;
        $this->nom = $user->nom;
        $this->photo = $user->photo;
        $this->prenom = $user->prenom;
        $this->role = $user->role;
        $this->statut = $user->statut;
    }
    public function saveUser()
    {
        $this->validate();
        if (!$this->user) {
            $this->edit = false;
            $user = User::create($this->only(['username', 'email', 'password', 'tel', 'adresse', 'nom', 'photo', 'prenom', 'role', 'statut']));
            $user->syncRoles([$this->role]);
            return redirect()->route('admin.users.index')->with('success', 'User successfully created!');
        } else {
            $this->edit = true;
            $this->user->update($this->only(['username', 'email', 'password', 'tel', 'adresse', 'nom', 'photo', 'prenom', 'role', 'statut']));
            $this->user->syncRoles([$this->role]);
            return redirect()->route('admin.users.index')->with('success', 'User successfully updated!');
        }
        $this->reset();
    }
    public function rules(): array
    {
        return [
            'username' => ['required', 'string', 'max:255'],
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'tel' => ['nullable', 'string', 'max:255'],
            'adresse' => ['nullable', 'string', 'max:255'],
            'statut' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
            'password'        => ['required', 'confirmed'],
        ];
    }

    public function validationAttributes(): array
    {
        return [
            'username' => 'username',
            'nom' => 'nom',
            'prenom' => 'prenom',
            'role' => 'role',
            'tel' => 'tel',
            'adresse' => 'adresse',
            'statut' => 'statut',
            'email' => 'email',
            'photo' => 'photo',
            'password'        => 'passsword',
        ];
    }
}

<?php

namespace App\Livewire\Forms;

use App\Models\Agence;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\WithFileUploads;

class AgenceForm extends Form
{
    use WithFileUploads;
    public ?Agence $agence = null;
    public $raisonSoc = '';
    public $logoAgence;
    public $ville;
    public $pays;
    public $telAgence;
    public $cnss;
    public $ifu;
    public $compte_bancaire;
    public $email;

    public function setAgence(?Agence $agence = null): void
    {
        $this->agence = $agence;
        $this->raisonSoc = $agence->raisonSoc;
        $this->logoAgence = $agence->logoAgence;
        $this->ville = $agence->ville;
        $this->pays = $agence->pays;
        $this->telAgence = $agence->telAgence;
        $this->cnss = $agence->cnss;
        $this->ifu = $agence->ifu;
        $this->compte_bancaire = $agence->compte_bancaire;
        $this->email = $agence->email;
    }


    public function updateAgence()
    {
        $validated = $this->validate();

        $this->agence->update($validated);
        if ($this->logoAgence) {
            //$validated['logoAgence'] = $this->logoAgence->store('uploads', 'public');
            $this->agence->clearMediaCollection('logos');
            $this->agence->addMedia($this->logoAgence)->toMediaCollection('logos');
        }
        return redirect()->route('manager.agence.index')->with('success', 'Agence successfully updated!');
    }

    public function rules(): array
    {
        return [
            'raisonSoc' => ['required', 'string', 'min:4'],
            'logoAgence' => ['nullable', 'image', 'sometimes', 'max:1024'],
            'ville' => ['required', 'string', 'min:4'],
            'pays' => ['required', 'string', 'min:4'],
            'telAgence' => ['required', 'string', 'min:4'],
            'cnss' => ['required', 'string', 'min:4'],
            'ifu' => ['required', 'string', 'min:4'],
            'compte_bancaire' => ['required', 'string', 'min:4'],
            'email' => ['required', 'email', 'min:4'],
        ];
    }
}

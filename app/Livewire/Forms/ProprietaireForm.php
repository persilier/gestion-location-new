<?php

namespace App\Livewire\Forms;

use App\Models\Proprietaire;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProprietaireForm extends Form
{
    public ?Proprietaire $proprietaire = null;
    public $user_id;
    public $agence_id;
    public $numCompte;
    public $typeCompte;
    public $cniProprio;
    public $typePiece;
    public $ifuProprio;

    public function setProprietaire(?Proprietaire $proprietaire = null): void
    {
        $this->proprietaire = $proprietaire;
        $this->user_id = $proprietaire->user_id;
        $this->agence_id = $proprietaire->agence_id;
        $this->numCompte = $proprietaire->numCompte;
        $this->typeCompte = $proprietaire->typeCompte;
        $this->cniProprio = $proprietaire->cniProprio;
        $this->typePiece = $proprietaire->typePiece;
        $this->ifuProprio = $proprietaire->ifuProprio;
    }


    public function saveProprietaire()
    {
        $this->validate();
        if (!$this->proprietaire) {
            Proprietaire::create($this->validate());
            return redirect()->route('manager.proprietaires.index')->with('success', 'Proprietaire successfully created!');
        } else {
            $this->proprietaire->update($this->validate());
            return redirect()->route('manager.proprietaires.index')->with('success', 'Proprietaire successfully updated!');
        }
        $this->reset();
    }

    public function rules(): array
    {
        return [
            'ifuProprio' => ['required', 'string'],
            'numCompte' => ['required', 'string'],
            'user_id' => ['required', 'integer'],
            'agence_id' => ['required', 'integer'],
            'typeCompte' => ['required', 'string'],
            'cniProprio' => ['required', 'string'],
            'typePiece' => ['required', 'string'],
        ];
    }
}

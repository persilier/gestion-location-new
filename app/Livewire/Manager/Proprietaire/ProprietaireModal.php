<?php

namespace App\Livewire\Manager\Proprietaire;

use App\Livewire\Forms\ProprietaireForm;
use App\Models\Agence;
use App\Models\Proprietaire;
use App\Models\User;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ProprietaireModal extends ModalComponent
{
    public ?Proprietaire $proprietaire = null;
    public ProprietaireForm $form;


    public function mount(Proprietaire $proprietaire = null): void
    {
        if ($proprietaire && $proprietaire->exists) {
            $this->form->setProprietaire($proprietaire);
        }
    }
    public function saveProprietaire(): void
    {

        $this->form->saveProprietaire();
        $this->closeModal();
        $this->dispatch('refresh-list');
    }
    public function render()
    {
        $agences = Agence::all();
        $users = User::role('proprietaire')->get();
        return view('livewire.manager.proprietaire.proprietaire-modal', ['agences' => $agences, 'users' => $users]);
    }
}

<?php

namespace App\Livewire\Settings;

use App\Livewire\Forms\AgenceForm;
use App\Models\Agence as ModelsAgence;
use Livewire\Component;

class Agence extends Component
{

    public $agence;
    public AgenceForm $form;

    public function mount()
    {
        $this->agence = ModelsAgence::get()->first();
        $this->form->setAgence($this->agence);
    }

    public function updateAgence()
    {
        $this->form->updateAgence();
        $this->dispatch('refresh-list');
    }
    public function render()
    {

        return view('livewire.settings.agence');
    }
}

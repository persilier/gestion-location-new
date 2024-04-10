<?php

namespace App\Livewire\Manager\Agents;

use App\Livewire\Forms\AgentForm;
use App\Models\Agence;
use App\Models\Agent;
use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class AgentModal extends ModalComponent
{

    public ?Agent $agent = null;
    public AgentForm $form;


    public function mount(Agent $agent = null): void
    {
        if ($agent && $agent->exists) {
            $this->form->setAgent($agent);
        }
    }
    public function saveAgent(): void
    {

        $this->form->saveAgent();
        $this->closeModal();
        $this->dispatch('refresh-list');
    }
    public function render()
    {
        $agences = Agence::all();
        $users = User::role(['employe', 'manager'])->get();
        return view('livewire.manager.agents.agent-modal', ['agences' => $agences, 'users' => $users]);
    }
}

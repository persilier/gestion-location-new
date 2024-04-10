<?php

namespace App\Livewire\Manager\Agents;

use App\Livewire\Forms\AgentForm;
use App\Models\Agent;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class AgentShowModal extends ModalComponent
{
    public ?Agent $agent = null;
    public AgentForm $form;


    public function mount(Agent $agent = null): void
    {
        if ($agent && $agent->exists) {
            $this->form->setAgent($agent);
        }
    }
    public function render()
    {
        return view('livewire.manager.agents.agent-show-modal');
    }
}

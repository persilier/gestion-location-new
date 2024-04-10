<?php

namespace App\Livewire\Forms;

use App\Models\Agent;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AgentForm extends Form
{
    public ?Agent $agent = null;
    public $fonction;
    public $user_id;
    public $agence_id;
    public $statut;
    public $service;
    public $dateAniv;
    public $dateEmbauche;

    public function setAgent(?Agent $agent = null): void
    {
        $this->agent = $agent;
        $this->fonction = $agent->fonction;
        $this->user_id = $agent->user_id;
        $this->agence_id = $agent->agence_id;
        $this->statut = $agent->statut;
        $this->service = $agent->service;
        $this->dateAniv = $agent->dateAniv;
        $this->dateEmbauche = $agent->dateEmbauche;
    }


    public function saveAgent()
    {
        $this->validate();
        if (!$this->agent) {
            Agent::create($this->validate());
            return redirect()->route('manager.agents.index')->with('success', 'Agent successfully created!');
        } else {
            $this->agent->update($this->validate());
            return redirect()->route('manager.agents.index')->with('success', 'Agent successfully updated!');
        }
        $this->reset();
    }

    public function rules(): array
    {
        return [
            'fonction' => ['required', 'string', 'min:4'],
            'service' => ['required', 'string'],
            'user_id' => ['required', 'integer'],
            'agence_id' => ['required', 'integer'],
            'statut' => ['required', 'string', 'min:4'],
            'dateAniv' => ['required', 'date'],
            'dateEmbauche' => ['required', 'date'],
        ];
    }
}

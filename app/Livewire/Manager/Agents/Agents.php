<?php

namespace App\Livewire\Manager\Agents;

use App\Models\Agent;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Agents extends Component
{
    use WithPagination;
    public ?Agent $agent = null;
    public $delete_id;
    public $perPage = 10;
    public $search = '';
    public $sortField = 'service';
    public $sortDirection = 'ASC';

    #[On('deleteConfirmed')]
    public function deleteUser()
    {
        $user = Agent::find($this->delete_id);
        $user->delete();
        $this->dispatch('resourceDeleted');
    }
    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatch('show-delete-confirmation');
    }
    public function doSort($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = ($this->sortDirection === 'ASC') ? 'DESC' : 'ASC';
            return;
        }
        $this->sortField = $field;
        $this->sortDirection = 'ASC';
    }
    //lifecyle hook
    public function updatedPerPage()
    {
        $this->resetPage();
    }
    public function updatedSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $agents = Agent::with('user')->whereAny(['fonction', 'service'], 'like', '%' . $this->search . '%')->orderBy($this->sortField, $this->sortDirection)->paginate($this->perPage);
        return view('livewire.manager.agents.agents', ['agents' => $agents]);
    }
}

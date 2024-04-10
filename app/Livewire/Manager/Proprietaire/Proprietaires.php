<?php

namespace App\Livewire\Manager\Proprietaire;

use App\Models\Proprietaire;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Proprietaires extends Component
{
    use WithPagination;
    public ?Proprietaire $proprietaire = null;
    public $delete_id;
    public $perPage = 10;
    public $search = '';
    public $sortField = 'typeProprio';
    public $sortDirection = 'ASC';

    #[On('deleteConfirmed')]
    public function deleteUser()
    {
        $user = Proprietaire::find($this->delete_id);
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
        $proprietaires = Proprietaire::with('user')->orderBy($this->sortField, $this->sortDirection)->paginate($this->perPage);
        return view('livewire.manager.proprietaire.proprietaires', ['proprietaires' => $proprietaires]);
    }
}

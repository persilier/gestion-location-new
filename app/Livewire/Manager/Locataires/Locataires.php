<?php

namespace App\Livewire\Manager\Locataires;

use Livewire\Component;
use Livewire\WithFileUploads;

class Locataires extends Component
{
    use WithFileUploads;

    public $document;
    public $name;
    public $type;
    public $path;

    public function uploadDocument()
    {
        $this->validate([
            'document' => 'required|mimes:pdf,doc,docx', // Add validation rules as per your requirement
        ]);

        // Save document to storage
        $documentPath = $this->document->store('documents');

        // Extract document details
        $this->name = $this->document->getClientOriginalName();
        $this->type = $this->document->getClientMimeType();
        $this->path = $documentPath;

        // Additional logic if needed, such as saving to database

        // Clear form fields
        $this->document = null;

        // Emit event or perform other actions
        $this->dispatch('documentUploaded');
    }

    public function render()
    {
        return view('livewire.manager.locataires.locataires');
    }
}

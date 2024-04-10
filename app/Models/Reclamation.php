<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reclamation extends Model
{
    use HasFactory;
    protected $fillable = [
        'contenu',
        'etat',
        'locataire_id',
        'dateRecl'
    ];

    public function locataire(): BelongsTo
    {
        return $this->belongsTo(Locataire::class, 'locataire_id', 'id');
    }
}

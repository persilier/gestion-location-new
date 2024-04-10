<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contrat extends Model
{
    use HasFactory;
    protected $fillable = [
        'dateDebut',
        'dureeCont',
        'conditions',
        'locataire_id',
        'location_id',
    ];
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }
    public function locataire(): BelongsTo
    {
        return $this->belongsTo(Locataire::class, 'locataire_id', 'id');
    }
}

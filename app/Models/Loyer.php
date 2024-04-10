<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Loyer extends Model
{
    use HasFactory;
    protected $fillable = [
        'dateLoyer',
        'mensuel',
        'year',
        'caution',
        'locataire_id',
        'location_id',
        'agence_id',
    ];

    public function paiements(): HasMany
    {
        return $this->hasMany(Paiement::class);
    }
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
    public function locataire(): BelongsTo
    {
        return $this->belongsTo(Locataire::class);
    }
}

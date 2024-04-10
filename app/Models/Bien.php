<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bien extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'adreBien',
        'ville',
        'pays',
        'photoBien',
        'supeBien',
        'typeBien',
        'proprietaire_id',
        'agence_id',
    ];

    public function proprietaire(): BelongsTo
    {
        return $this->belongsTo(Proprietaire::class, 'proprietaire_id', 'id');
    }

    public function agence(): BelongsTo
    {
        return $this->belongsTo(Agence::class);
    }

    public function visites(): HasMany
    {
        return $this->hasMany(Visite::class);
    }
    public function locations(): HasMany
    {
        return $this->hasMany(Location::class);
    }
}

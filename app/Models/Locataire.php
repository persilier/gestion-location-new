<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Locataire extends Model
{
    use HasFactory;
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function reclamations(): HasMany
    {
        return $this->hasMany(Reclamation::class);
    }

    public function loyers(): HasMany
    {
        return $this->hasMany(Loyer::class,);
    }

    public function contrats(): HasMany
    {
        return $this->hasMany(Contrat::class);
    }
}

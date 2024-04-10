<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proprietaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'numCompte',
        'typeCompte',
        'typeProprio',
        'agence_id',
        'cniProprio',
        'ifuProprio',
        'typePiece',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function abonnements(): HasMany
    {
        return $this->hasMany(Abonnement::class);
    }
    public function agence(): BelongsTo
    {
        return $this->belongsTo(Agence::class);
    }
}

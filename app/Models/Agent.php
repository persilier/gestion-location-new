<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agent extends Model
{
    use HasFactory;
    protected $fillable = [
        'fonction',
        'agence_id',
        'user_id',
        'dateAniv',
        'dateEmbauche',
        'statut',
        'service',
    ];

    protected $casts = [
        'dateEmbauche' => 'datetime',
        'dateAniv' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function agence(): BelongsTo
    {
        return $this->belongsTo(Agence::class);
    }
    public function visites(): HasMany
    {
        return $this->hasMany(Visite::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Visite extends Model
{
    use HasFactory;
    protected $fillable = [
        'dateHeure',
        'commentaire',
        'bien_id',
        'agence_id',
        'agent_id',
    ];
    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }
    public function agence(): BelongsTo
    {
        return $this->belongsTo(Agence::class);
    }
    public function bien(): BelongsTo
    {
        return $this->belongsTo(Bien::class);
    }
}

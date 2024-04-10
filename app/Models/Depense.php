<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Depense extends Model
{
    use HasFactory;
    protected $fillable = [
        'descRepa',
        'dateSignal',
        'statRepar',
        'coutRepar',
        'agence_id'
    ];

    public function agence(): BelongsTo
    {
        return $this->belongsTo(Agence::class);
    }

    public function bien(): BelongsTo
    {
        return $this->belongsTo(Bien::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Abonnement extends Model
{
    use HasFactory;
    protected $fillable = [
        'dateDebut',
        'dateFin',
        'stituation',
        'conditions',
        'commission',
        'agence_id',
        'proprietaire_id',
    ];
    protected $primaryKey = 'agence_id';
    public function agence(): BelongsTo
    {
        return $this->belongsTo(Agence::class);
    }

    public function proprietaire(): BelongsTo
    {
        return $this->belongsTo(Proprietaire::class,);
    }
}

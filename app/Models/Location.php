<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\MediaLibrary\InteractsWithMedia;

class Location extends Model
{
    use HasFactory;
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'titreLoca',
        'chambre',
        'salon',
        'douche',
        'wc',
        'description',
        'quartier',
        'etatLocal',
        'chargeLocal',
        'prix',
        'statutLocal',
        'cuisine',
        'photoLoca',
        'bien_id'
    ];

    public function bien(): BelongsTo
    {
        return $this->belongsTo(Bien::class, 'bien_id', 'id');
    }
    public function loyers(): HasMany
    {
        return $this->hasMany(Loyer::class, 'id', 'loyer_id');
    }
    public function contrat(): HasOne
    {
        return $this->hasOne(Contrat::class);
    }
}

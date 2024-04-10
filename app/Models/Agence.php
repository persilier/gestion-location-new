<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Agence extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    protected $fillable = [
        'raisonSoc',
        'telAgence',
        'email',
        'ville',
        'pays',
        'ifu',
        'logoAgence',
        'cnss',
        'compte_bancaire',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Fit::Contain, 300, 300)
            ->nonQueued();
    }
    public function proprietaires(): HasMany
    {
        return $this->hasMany(Proprietaire::class);
    }

    public function abonnements(): HasMany
    {
        return $this->hasMany(Abonnement::class);
    }

    public function depenses(): HasMany
    {
        return $this->hasMany(Depense::class);
    }
    public function visites(): HasMany
    {
        return $this->hasMany(Visite::class);
    }
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}

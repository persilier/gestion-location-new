<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Paiement extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function loyer(): BelongsTo
    {
        return $this->belongsTo(Loyer::class);
    }
}

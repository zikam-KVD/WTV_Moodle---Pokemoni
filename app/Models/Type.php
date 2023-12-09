<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    use HasFactory;

    protected $table = "pokemon_types";

    /**
     * @return HasMany
     */
    public function pokemon(): HasMany
    {
        return $this->hasMany('App\Models\Pokemon');
    }

    public function getNazev()
    {
        return $this->nazev;
    }
}

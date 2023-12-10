<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pokemon extends Model
{
    use HasFactory;

    protected $table = "pokemons";

    protected $fillable = ["name", "type_id", "rarity"];

    /**
     * @return BelongsTo
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo('App\Models\Type');
    }
}

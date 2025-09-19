<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['country_id', 'name'];


    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }
}

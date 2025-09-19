<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Subscription extends Model
{
    protected $fillable = ['name'];

    public function topics(): BelongsToMany
    {
        return $this->belongsToMany(Topic::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Topic extends Model
{
    protected $fillable = ['name', 'parent_id'];

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'topic_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['name', 'parent_id'];

    public function children()
    {
        return $this->hasMany(self::class, 'topic_id', 'id');
    }
}

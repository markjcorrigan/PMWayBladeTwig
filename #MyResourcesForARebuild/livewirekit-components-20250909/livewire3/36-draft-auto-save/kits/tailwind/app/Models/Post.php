<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    protected $fillable = ['title', 'post_text', 'status', 'published_at'];

    protected $casts = [
        'published_at' => 'datetime'
    ];

    public function revisions(): HasMany
    {
        return $this->hasMany(PostRevision::class);
    }
}

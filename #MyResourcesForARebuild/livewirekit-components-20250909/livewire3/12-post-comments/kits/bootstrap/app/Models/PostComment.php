<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    protected $fillable = ['username', 'post_id', 'comment_text', 'parent_id'];

    public function replies(): HasMany
    {
        return $this->hasMany(PostComment::class, 'parent_id')->latest();
    }
}

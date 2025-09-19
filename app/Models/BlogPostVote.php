<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPostVote extends Model
{
    use HasFactory;

    protected $fillable = ['blogpost_id', 'user_id', 'vote'];
}

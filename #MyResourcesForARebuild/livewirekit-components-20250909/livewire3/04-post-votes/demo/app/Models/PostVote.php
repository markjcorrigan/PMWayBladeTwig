<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostVote extends Model
{
    use HasFactory;

    protected $fillable = ['post_id', 'user_id', 'vote'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostRevision extends Model
{
    protected $fillable = ['post_id', 'title', 'post_text'];

    protected $table = 'post_revisions';
}

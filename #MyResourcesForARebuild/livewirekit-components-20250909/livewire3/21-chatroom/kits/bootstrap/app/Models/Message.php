<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['user_id', 'message_text'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

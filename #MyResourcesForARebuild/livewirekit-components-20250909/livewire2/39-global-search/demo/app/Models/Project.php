<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'user_id'];

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function tasks(): hasMany
    {
        return $this->hasMany(Task::class);
    }
}

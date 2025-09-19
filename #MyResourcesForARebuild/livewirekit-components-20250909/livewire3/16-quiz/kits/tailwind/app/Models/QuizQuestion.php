<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QuizQuestion extends Model
{
    protected $fillable = ['question'];

    public function options(): HasMany
    {
        return $this->hasMany(QuizOption::class, 'question_id');
    }
}

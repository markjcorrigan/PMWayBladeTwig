<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'due_date'];

    protected function dueDate(): Attribute
    {
        return Attribute::make(
            set: fn($value) => Carbon::createFromFormat('m/d/Y', $value)
                ->format('Y-m-d'),
        );
    }
}

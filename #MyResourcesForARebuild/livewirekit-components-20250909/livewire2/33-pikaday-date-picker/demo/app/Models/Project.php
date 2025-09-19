<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'due_date'];

    public function setDueDateAttribute($value)
    {
        $this->attributes['due_date'] = Carbon::createFromFormat('m/d/Y', $value)
            ->format('Y-m-d');
    }
}

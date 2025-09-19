<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Document extends Model
{
    use Searchable;

    protected $fillable = ['name', 'path', 'shortname'];

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
        ];
    }
}


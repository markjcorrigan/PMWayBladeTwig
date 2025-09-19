<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public int $taxTotal = 0;

    protected $fillable = ['product_id', 'qty'];

    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}

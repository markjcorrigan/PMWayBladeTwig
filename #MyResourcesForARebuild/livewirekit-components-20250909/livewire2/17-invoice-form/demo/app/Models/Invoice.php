<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = ['customer_name', 'customer_email', 'taxes'];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

    public function getTotalAttribute()
    {
        $total = 0;

        foreach ($this->products as $product) {
            $total += $product->price * $product->pivot->quantity;
        }

        return $total * (1 + (is_numeric($this->taxes) ? $this->taxes : 0) / 100);
    }
}

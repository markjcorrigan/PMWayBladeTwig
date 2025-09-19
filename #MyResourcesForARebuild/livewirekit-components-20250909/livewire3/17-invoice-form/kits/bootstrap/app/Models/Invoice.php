<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Invoice extends Model
{
    protected $fillable = ['customer_name', 'customer_email', 'taxes'];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

    protected function total(): Attribute
    {
        return Attribute::make(
            get: function () {
                $total = 0;

                foreach ($this->products as $product) {
                    $total += $product->price * $product->pivot->quantity;
                }

                return $total * (1 + (is_numeric($this->taxes) ? $this->taxes : 0) / 100);
            },
        );
    }

    /*public function getTotalAttribute()
    {
        $total = 0;

        foreach ($this->products as $product) {
            $total += $product->price * $product->pivot->quantity;
        }

        return $total * (1 + (is_numeric($this->taxes) ? $this->taxes : 0) / 100);
    }*/
}

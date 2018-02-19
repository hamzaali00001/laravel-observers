<?php

namespace App\Observer;

use App\Product;

class ProductObserver
{
    public function creating(Product $product)
    {
        $tax = .20;

        if ($product->quantity < 10) {
            $product->price += $product->price * $tax;
        } else if ($product->quantity >= 10) {
            $product->price += $product->price * ($tax / 2);
        }
    }
}

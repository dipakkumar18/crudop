<?php

namespace App\Observers;

use App\Models\product;

class productObserver
{
    
    /**
     * Handle the product "created" event.
     */
    public function created(product $product): void
    {
        // $price = $product->price;
        // $product->rs = $price * 80;
        // $product->save();
    }

    /**
     * Handle the product "updated" event.
     */
    
    public function updated(product $product): void
    {
        // $price = $product->price;
        // $product->rs = $price * 80;
        // $product->updateQuietly();
        
    }

    /**
     * Handle the product "deleted" event.
     */
    public function deleted(product $product): void
    {
        //
    }

    /**
     * Handle the product "restored" event.
     */
    public function restored(product $product): void
    {
        //
    }

    /**
     * Handle the product "force deleted" event.
     */
    public function forceDeleted(product $product): void
    {
        //
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function addItem($plan_id)
    {
     
        $this->items()->create([
            'plan_id' => $plan_id,
        ]);
   
    }
    public function removeProduct($price_id)
    {
        $this->items()->where('plan_id', $price_id)->delete();
    }
    public function items()
    {
        return $this->hasMany(CartAsProduct::class);
    }
    public function getTotal()
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->plan->amount;
        }
        return $total;
    }
    public function emptyCart()
    {
        $this->items()->delete();
    }
    public function deleteCart()
    {
        $this->emptyCart();
        $this->delete();
    }
    public function  buyIntents()
    {
        return $this->hasMany(BuyIntent::class);
    }

}

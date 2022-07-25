<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartAsProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_id', 
    ];
    public function plan()
    {
        return $this->belongsTo(Plan::class);

    }
    public function getProduct()
    {
       return Product::where('id', $this->plan->product_id)->first();
        # code...
    }
}

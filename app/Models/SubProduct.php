<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Cashier;
class SubProduct extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'description',
        'product_id',
        'type',
        'stripe_id',
    ];
    public function getPlans()
    {
        return Cashier::stripe()->prices->all(['product'=>$this->stripe_id ,'active'=>true ]);

        # code...
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyIntent extends Model
{
    use HasFactory;

    protected $fillable = [
        'stripe_id',
        'user_id',
        'cart_id',
        'status_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function getStatus()
    {
        return $this->status->name;
    }
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
        # code...
    
}

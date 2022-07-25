<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pucharse extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'plan_id',
        'product_id',
        'buy_intent_id',
        'expires_at',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function buyIntent()
    {
        return $this->belongsTo(BuyIntent::class);
    }
    

}

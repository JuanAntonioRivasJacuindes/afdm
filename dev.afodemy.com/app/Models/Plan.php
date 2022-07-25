<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = [
        'plan_name',
        'plan_description',
        'stripe_plan_id',
        'amount',
        'price_type',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'subproduct_id',
        'status_id',
        'order_id'
    ];
    public function subproduct()
    {
        return $this->belongsTo(SubProduct::class);
        # code...
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

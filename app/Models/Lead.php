<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'number',
        'status_id',
        'user_id',
        'product_id'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

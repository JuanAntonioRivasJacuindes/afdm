<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyPayment extends Model
{
    use HasFactory;
    protected $fillable=[
        'amount',
        'inscription_id',
        'advisor_id',
        'voucher',
        'status_id',
        'expires_at',
    ];
}

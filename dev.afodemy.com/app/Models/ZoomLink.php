<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZoomLink extends Model
{
    use HasFactory;
    protected $fillable=[
        'link',
        'diploma_id',
        'status_id',
        'expires_at',
    ];
}

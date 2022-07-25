<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revoe extends Model
{
    use HasFactory;
    protected $fillable = [
      'key',
      'register_date',
      'diploma_id'
    ];
}

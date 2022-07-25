<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionNames extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'permission_name',
        'permission_id',
    ];
}

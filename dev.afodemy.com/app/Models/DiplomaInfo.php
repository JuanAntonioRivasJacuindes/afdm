<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomaInfo extends Model
{
    use HasFactory;
    protected $fillable= [
        'introduction',
        'objectives',
        'target',
        'skills',
        'contact',
        'diploma_id',
    ];

}

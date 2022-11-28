<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuenfinLeads extends Model
{
    use HasFactory;
    protected $fillable = [
        'diplomado',
        'fullnamelead',
        'email',
        'numberlead',
    ];
}

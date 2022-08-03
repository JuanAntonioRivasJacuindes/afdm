<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherInfo extends Model
{
    use HasFactory;
    protected $fillable =[
        'full_name',
        'phone_number',
        'email',
        'rfc',
        'education',
        'ocupation',
        'bank',
        'account_number',
        'clabe',
        'terms',
        'synthesis',
        'dni',
        'cedula',
    ];
}

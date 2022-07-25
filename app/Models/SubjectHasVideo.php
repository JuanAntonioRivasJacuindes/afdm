<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectHasVideo extends Model
{
    use HasFactory;

    protected $fillable=[
        'index',
        'video_id',
        'subject_id',
        'status_id',
    ];
}

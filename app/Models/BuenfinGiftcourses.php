<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuenfinGiftcourses extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'link_iframe',
        'flyer',
        'poster',
    ];
    //buenfin
    public function inscription()
    {
        return $this->hasOne(Inscription::class, 'id');
    }
}

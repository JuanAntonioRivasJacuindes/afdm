<?php

namespace App\Models;

use BaconQrCode\Renderer\RendererStyle\Fill;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    use HasFactory;

    protected $fillable = [
        'starts_at',
        'ends_at',
        'status_id',
    ];
    public function status()
    {
        return $this->hasOne(Status::class);
    }
}

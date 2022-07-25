<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'flyer',
        'poster',
        'stripe_id',
        'status_id',
        'date_id',
        'product_id',
    ];

    public function date()
    {
        return $this->belongsTo(Date::class);
    }
    public function status()
    {

        return $this->belongsTo(Status::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }    
    public function prices()
    {
        # code...
        return $this->hasMany(Prices::class);
        
    }
    public function flyer_url()
    {
        
        return str_replace("public", "storage", asset($this->attributes['flyer']));
    }
    public function poster_url()
    {
        
        return str_replace("public", "storage", asset($this->attributes['poster']));
    }
    public function permissionName()
    {
        return $this->hasOne(PermissionNames::class);
    }
    public function getPermissionName()
    {
        return $this->permissionName->name;
    }
}

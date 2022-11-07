<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'object',
        'stripe_id',
    ];
    public function getPermissionName()
    {
        return $this->hasOne(PermissionNames::class)->first()->permission_name;

        # code...
    }
    public function plans()
    {
        return $this->hasMany(Plan::class);
    }
    public function totalPrices()
    {
        return Plan::where('product_id', $this->id)->where('price_type', 2)->get();

    }
    public function recurrentPlans()
    {
        return Plan::where('product_id', $this->id)->where('price_type', 1)->get();

    }
    function inscription()
    {
        return Plan::where('product_id', $this->id)->where('price_type', 3)->first();
    }
    public function productType()
    {

        if($this->type == 2)
        {
            return Course::where('product_id', $this->id)->first();

        }
        elseif($this->type == 1)
        {

            return Diploma::where('product_id', $this->id)->first();

        }

    }
    public function subproducts()
    {
        return $this->hasMany(SubProduct::class);
    }
    public function suscribedUsers()
    {
        return $this->belongsToMany(User::class,'inscriptions')->get();
    }
}

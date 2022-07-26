<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Inscription extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'product_id',
        'advisor_id',
        'status_id',
        'voucher',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function activePayments()
    {
        $now= Carbon::now();
        $now=$now->subDays(15);

        return MonthlyPayment::whereDate('expires_at' , '>',$now )->where('inscription_id',$this->id)->orderBy('expires_at')->get();
    }
    public function payments()
    {
        return $this->hasMany(MonthlyPayment::class);
        # code...
    }
    public function hasActivePayments()
    {

        if($this->activePayments()->count()>0){
            return true;
        }else{
            return false;
        }
    }
    public function allowAccess()
    {
        if($this->hasActivePayments()||$this->hasGracePeriod()){


            return true;
        }else{
            return false;
        }
    }
    public function hasGracePeriod()
    {
        $now= Carbon::now();

        if($this->lastPaymentExpire()>=$now){
            return true;
        }else{
            return false;
        }
        # code...
    }

    public function lastPaymentExpire()
    {
        if(!$this->hasActivePayments()){
            $date = Carbon::create( $this->product->productType()->date->starts_at);
            $date= $date->addDays(20);
            return $date;
        }else{
            $date = Carbon::create($this->activePayments()->last()->expires_at);

            return $date;
        }
        # code...
    }



}

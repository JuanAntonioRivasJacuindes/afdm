<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function activePayments()
    {
        $now= Carbon::now();
        $now=$now->subDays(7);

        return MonthlyPayment::whereDate('expires_at' , '>',$now )->where('inscription_id',$this->id)->orderBy('expires_at')->get();
    }
    public function payments()
    {
        return $this->hasMany(MonthlyPayment::class);

    }
    public function nextPayment()
    {
        return$this->lastExpire()->addMonth(1);
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
        // dd($this->user->subscribed($this->product_id));
        if($this->hasActivePayments()&&$this->user_id == Auth::user()->id ||$this->hasGracePeriod()||$this->user->subscribed($this->product_id)){
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
            $date= $date->addDays(7);
            return $date;
        }else{
            $date = Carbon::create($this->activePayments()->last()->expires_at);

            return $date;
        }
        # code...
    }


     public function lastExpire()
    {

        if($this->payments->count()==0){
            $date = Carbon::create( $this->product->productType()->date->starts_at);
            $date= $date->addDays(7);
            return $date;
        }else{
            $date = Carbon::create($this->payments->last()->expires_at);

            return $date;
        }
        # code...
    }
}

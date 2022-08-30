<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Cashier\Billable;



class User extends Authenticatable
{
    use HasRoles;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'email', 'password','profile_photo_path'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
    public function pucharses()
    {
        return $this->hasMany(Pucharse::class);
    }
    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }
    public function findInscription($product_id)
    {
        return Inscription::where('user_id',$this->id)
        ->where('product_id',$product_id)
        ->first();

    }
    public function payments()
    {
        return $this->hasManyThrough(MonthlyPayment::class, Inscription::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }
    public function isRegistered($product_id)
    {
        $insc= Inscription::where('user_id',$this->id)
        ->where('product_id', $product_id)->first();

        if($insc!=null){
            return 1;
        }else{
            return 0;
        }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Storage;
class Diploma extends Model
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
        'generation',
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
    public function flyer_thumbnail()
    {
        return str_replace("public/course/flyers", "storage/course/flyers/thumbnails", asset($this->attributes['flyer']));
    }
    public function poster_url()
    {
        return str_replace("public", "storage", asset($this->attributes['poster']));
    }
    // public function permissionName()
    // {
    //     return $this->hasOne(PermissionNames::class);
    // }
    public function info()
    {
        return $this->hasOne(DiplomaInfo::class);
    }
    public function getPermissionName()
    {
        return $this->permissionName->name;
    }
    public function subjects()
    {
        return $this->hasMany(Subject::class)->get();
    }
    public function revoe()
    {
        return $this->hasOne(Revoe::class);
    }
    public function getTotalHours()
    {
      $totalHours=0;
      foreach ($this->subjects() as $subject) {
        $totalHours=$totalHours+$subject->hours;
      }
      return($totalHours);
      // code...
    }
    public function getTotalCredits()
    {
      $totalCredits=0;
      foreach ($this->subjects() as $subject) {
        $totalCredits=$totalCredits+$subject->credits;
      }
      return($totalCredits);
      // code...
    }
    public function getStartsString()
    {

      $date = $this->date->starts_at;
      $day = date('d',strtotime($date));
      $month = date('F',strtotime($date));
      $year = date('o',strtotime($date));
      return $day." de ".__($month). " del ". $year;

      // code...
    }
    public function getEndsString()
    {

      $date = $this->date->ends_at;
      $day = date('d',strtotime($date));
      $month = date('F',strtotime($date));
      $year = date('o',strtotime($date));
      return $day." de ".__($month). " del ". $year;

      // code...
    }
    public function zoomLink(){


        return $this->hasOne(ZoomLink::class);
    }
}

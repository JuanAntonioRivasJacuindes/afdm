<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
      'key',
      'unit_index',
      'name',
      'hours',
      'credits',
      'diploma_id'
    ];
    public function videos()
    {

        return $this->belongsToMany(Video::class,'subject_has_videos')->get();

    }
}

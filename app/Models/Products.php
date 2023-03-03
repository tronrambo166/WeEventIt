<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Products extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(Categories::class);
       //  return $this->hasMany(Categories::class,'foreign_key','primary');
    }
    //use SoftDeletes;
}

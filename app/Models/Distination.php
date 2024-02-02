<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distination extends Model
{
    use HasFactory;

    protected $fillable = [
        "nameDistination"
    ];
    
    public function aventures(){
        return $this->hasMany(Aventure::class);
    }
    public function image(){
        return $this->hasOne(Image::class,'distination_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aventure extends Model
{
    use HasFactory;
    protected $fillable = [
        "titelAventure",
        "descriptionsAventeur",
        "distination_id",
        "conseils"
    ];
    public function distination(){
        return $this->belongsTo(Distination::class);
    }
    public function image(){
        return $this->hasMany(Image::class);
    }
    
}

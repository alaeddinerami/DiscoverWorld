<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public function aventures(){
        return $this->belongsToMany(Aventure::class);
    }
    public function distination(){
        return $this->belongsTo(Distination::class);
    }
}
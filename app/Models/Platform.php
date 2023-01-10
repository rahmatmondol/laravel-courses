<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    public function course(){
        return $this->hasMany(Course::class);
    }

    public function img(){
        return $this->belongsTo(Img::class);
    }
}

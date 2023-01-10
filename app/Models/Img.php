<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Img extends Model
{
    use HasFactory;

    public function course(){
        return $this->hasMany(Course::class);
    }

    public function topic(){
        return $this->hasMany(Topic::class);
    }

    public function series(){
        return $this->hasMany(Series::class);
    }

    public function platform(){
        return $this->hasMany(Platform::class);
    }

    public function episod(){
        return $this->hasMany(Episod::class);
    }

    public function author(){
        return $this->hasMany(Author::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episod extends Model
{
    use HasFactory;

    public function course(){
        return $this->belongsToMany(Course::class, 'course_topic');
    }

    public function img(){
        return $this->belongsTo(Img::class);
    }
}

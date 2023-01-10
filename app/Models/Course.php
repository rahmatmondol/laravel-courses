<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function platform(){
        return $this->belongsTo(Platform::class)->with('img');
    }

    public function series(){
        return $this->belongsTo(Series::class)->with('img');
    }

    public function author(){
        return $this->belongsToMany(Author::class, 'author_course')->with('img');
    }

    public function img(){
        return $this->belongsTo(Img::class);
    }

    public function topic(){
        return $this->belongsToMany(Topic::class, 'course_topics')->with('img');
    }

    public function episod(){
        return $this->belongsToMany(Episod::class, 'course_episods')->with('img');
    }

    public function review(){
        return $this->belongsToMany(Review::class, 'course_review')->with('user');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Review extends Model
{
    use HasFactory;

    public function course(){
        return $this->BelongsToMany(Course::class, 'course_review');
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}

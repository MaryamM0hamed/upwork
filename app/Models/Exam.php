<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $guarded = [];

    function certifications(){
        return $this->belongsTo(Certification::class)->withDefault();
    }
    function question(){
        return $this->hasMany(Question::class);
    }
    function users() {
        return $this->belongsToMany(User::class);
    }
}

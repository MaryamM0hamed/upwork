<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $guarded = [];

    function users() {
        return $this->belongsTo(User::class)->withDefault();
    }

    function projects() {
        return $this->belongsTo(Project::class)->withDefault();
    }
    function reviews(){
        return $this-> hasMany(Review::class);
    }

    function payment(){
        return $this->hasOne(Payment::class)->withDefault();
    }

}


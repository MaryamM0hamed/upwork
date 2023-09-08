<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;
    protected $guarded = [];

    function exams(){
        return $this->hasOne(Exam::class)->withDefault();
    }
}

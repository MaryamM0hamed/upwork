<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];

    function users() {
        return $this->belongsTo(User::class)->withDefault(); //, 'user_project', 'projectid' , 'userid');

    }
    function skills() {
        return $this->belongsToMany(Skill::class);
    }

    function proppsals() {
        return $this->hasMany(Proposal::class);

    }
    function jobs(){
        return $this->hasMany(Job::class);

    }

}

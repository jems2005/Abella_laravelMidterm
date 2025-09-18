<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name','email','subject_id'];

    public function subject() {
        return $this->hasOne(Subject::class);
    }

    public function classrooms() {
        return $this->hasMany(Classroom::class);
    }
}

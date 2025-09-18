<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = ['room_number','teacher_id','capacity'];

    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentProgress extends Model {

    protected $table = 'student_progress';
    protected $primaryKey = 'id';
    protected $fillable = ['student', 'course_id', 'storyline_item'];



}

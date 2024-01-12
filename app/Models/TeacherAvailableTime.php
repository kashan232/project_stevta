<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeacherAvailableTime extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'institute_id',
        'campus_id',
        'teacher_id',
        'course_name',
        'subject_name',
        'lecture_date',
        'start_time',
        'end_time',
        'lecture_day', 
        'availability',
    ];


}

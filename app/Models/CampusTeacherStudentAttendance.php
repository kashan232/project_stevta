<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CampusTeacherStudentAttendance extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'institute_id',
        'campus_id',
        'teacher_id',
        'class_name',
        'section_name',
        'admission_no',
        'student_roll_number',
        'student_id',
        'student_name',
        'student_attendance_date',
        'student_attendance',
    ];  
}

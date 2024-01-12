<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CampusTeacherStudentLeaveApproval extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'institute_id',
        'campus_id',
        'teacher_id',
        'teacher_name',
        'class_name',
        'section_name',
        'student_name',
        'apply_date',
        'from_date',     
        'to_date',     
        'leave_reason',     
        'leave_status',
        'confirmation_by',

    ];

}

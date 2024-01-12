<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CampusTeacherCourseMaterial extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'institute_id',
        'campus_id',
        'teacher_id',
        'class_name',
        // 'section_name',
        'subject_name',
        'course_title',
        'upload_date',     
        'uploaded_document',     
    ];
}

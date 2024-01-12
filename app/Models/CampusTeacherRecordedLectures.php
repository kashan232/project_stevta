<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CampusTeacherRecordedLectures extends Model
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
        'lecture_title',
        'lecture_link',     
        'lecture_upld_dte',     
    ];
}

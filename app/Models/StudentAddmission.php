<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentAddmission extends Model
{
    use HasFactory;
    use SoftDeletes;

    
    protected $fillable = 
    [  
        'institute_id',
        'campus_id',
        'batch',
        'first_name',
        'last_name',
        'surname',
        'gender',
        'religion',
        'birth_date',
        'birth_certificate_img',
        'father_name',
        'contact',
        'Address',
        'enrollment_date',
        'class_name',
        'section_name',
        'gr',
        'scholarship_percentage',
        'student_img', 
        'covid_certificate_img', 
        'last_school',
        'leaving_certificate_img',
        'student_email',
        'password',
        'account_name',
        'account_number',
    ];
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OnlineRegistration extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = 
    [  
        'institute_id',
        'campus_id',
        'cnic',
        'retype_cnic',
        'email',
        'email_verification_code',
        'mobile_number',
        'father_name',
        'surname',
        'gender',
        'country',
        'domicile_province',
        'domicile_district',
        'password',
        'retype_password',
    ];
}

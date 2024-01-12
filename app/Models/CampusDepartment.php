<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CampusDepartment extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'institute_id',
        'campus_id',
        'dept_name',
    ];

}

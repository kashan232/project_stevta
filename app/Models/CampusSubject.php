<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CampusSubject extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'institute_id',
        'campus_id',
        'class_name',
        // 'section_name',
        'subject',
    ];
}

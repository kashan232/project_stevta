<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CampusPublicHoliday extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'institute_id',
        'campus_id',
        'holiday_title',
        'holiday_start_date',
        'holiday_end_date',
        'holiday_description',
    ];
}

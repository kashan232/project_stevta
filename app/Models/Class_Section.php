<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Class_Section extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function subjects()
    {
        return $this->hasMany(CampusSubject::class, 'section_name', 'section_name')
            ->where('class_name', $this->class_name);
    }

    protected $fillable = [
        'institute_id',
        'campus_id',
        'class_name',
        'section_name',
    ];
}

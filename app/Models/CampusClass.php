<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CampusClass extends Model
{
    use HasFactory;
    use SoftDeletes;


    // public function sections()
    // {
    //     return $this->hasMany(Class_Section::class, 'class_name'); // 'class_id' should be the foreign key column in the sections table
    // }

    // public function class_sections()
    // {
    //     return $this->hasMany(Class_Section::class, 'class_name', 'class_name');
    // }


    public function campusSubjects()
{
    return $this->hasMany(CampusSubject::class, 'class_name', 'class_name');
}


    protected $fillable = [
        'institute_id',
        'campus_id',
        'class_name',
        'batch',
    ];
}

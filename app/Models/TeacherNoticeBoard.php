<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeacherNoticeBoard extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function campus()
    {
        return $this->belongsTo(Campus::class, 'campus_id');
    }
}

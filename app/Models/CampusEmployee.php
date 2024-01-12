<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CampusEmployee extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'institute_id',
        'campus_id',
        'title_designation',
        'first_name',
        'last_name',
        'nic',
        'hire_date',
        'phone',
        'email',
        'password',
        'address',
        'department',
        'salary',
        'bps',
        'medical_allowance',
        'fuel_allowance',
        'house_allowance',
        'appointment_letter_no',
        'no_of_leaves',
        'emergency_contact_name',
        'emergency_contact_relation',
        'emergency_contact_phone',
        'employee_pic',
        'front_nic_pic',
        'back_nic_pic',
        'account_name',
        'account_number',
    ];



    // CampusEmployee.php model
 
    

    


}

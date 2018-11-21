<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployerDetails extends Model
{
    protected $table = 'employer_details_tbl';
    public $primaryKey = 'emp_id';
    public $timestamps = false;
    protected $filable = [
        'project_record_id',
        'emp_name',
        'office_address',
        'industry',
        'year_estalished',
        'number_of_employees'
    ];
}

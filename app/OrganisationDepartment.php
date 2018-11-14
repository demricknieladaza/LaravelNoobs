<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrganisationDeparment extends Model
{
    protected $table = 'organisation_department_tbl';
    public $primaryKey = 'dept_id';
    protected $fillable = [
        'dept_id',
        'org_id',
        'dept_name'
    ];
}

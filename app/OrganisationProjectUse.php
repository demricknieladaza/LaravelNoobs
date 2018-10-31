<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrganisationProjectUse extends Model
{
    protected $table = 'organisation_project_use_tbl';
    public $primaryKey = 'opu_id';
    public $timestamps = false;
    protected $fillable = [
        'op_id',
        'service',
        'area',
        'units'
    ]; 
}

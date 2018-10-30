<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrgnisationProjectService extends Model
{
    protected $table = 'organisation_project_service_tbl';
    public $primaryKey = 'ops_id';
    public $timestamps = false;
    protected $fillable = [
        'op_id',
        'service',
        'from',
        'until'
    ];
}

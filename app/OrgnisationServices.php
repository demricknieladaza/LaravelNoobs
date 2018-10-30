<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrgnisationServices extends Model
{
    protected $table = 'organisation_services_tbl';
    public $primaryKey = 'os_id';
    public $timestamps = false;
    protected $fillable = [
        'org_id',
        'service',
        'from',
        'until'
    ];
}

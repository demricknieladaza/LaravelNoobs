<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrgnisationProject extends Model
{
    protected $table = 'organisation_project_tbl';
    public $primaryKey = 'op_id';
    public $timestamps = false;
    protected $fillable = [
        'org_id',
        'project_title',
        'project_value',
        'type_of_development',
        'project_description',
        'project_images'
    ];
}

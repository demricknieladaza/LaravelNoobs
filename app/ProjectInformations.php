<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectInformations extends Model
{
    protected $fillable = [
        'project_title', 'project_id', 'location', 'type_of_development', 'construction_value','procurement_nd_route'
    ];
}

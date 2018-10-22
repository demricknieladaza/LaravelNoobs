<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Individuals extends Model
{
    protected $table = 'individuals_tbl';
    public $primaryKey = 'individuals_id';
    public $timestamps = false;
    protected $fillable = [
        'first_name',
        'sur_name',
        'images',
        'accredation',
        'accredation_year',
        'degree',
        'degree_year',
        'name_of_degree',
        'seniority',
        'award_name',
        'award_by',
        'year_awarded',
        'award_details',
        'services_offered',
        'project_experience',
        'type_of_use',
        'service_from',
        'service_until',
        'type_of_development',
        'project_description',
        'project_images',
        'team_member',
        'company_name'
    ];
}

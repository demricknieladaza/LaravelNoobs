<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndividualsProject extends Model
{
    protected $table = 'individuals_project_tbl';
    public $primaryKey = 'indp_id';
    public $timestamps = false;
    protected $fillable = [
        'ind_id',
        'project_title',
        'project_value',
        'type_of_development',
        'project_description',
        'profile_images'
    ]; 
}

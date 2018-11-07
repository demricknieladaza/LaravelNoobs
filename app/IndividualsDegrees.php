<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndividualsDegrees extends Model
{
    protected $table = 'individuals_degrees_tbl';
    public $primaryKey = 'degree_id';
    public $timestamps = false;
    protected $fillable = [
        'ind_id',
        'degree',
        'degree_year',
        'name_of_degree'
    ];
}

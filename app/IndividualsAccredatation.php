<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndividualsAccredatation extends Model
{
    protected $table = 'individuals_accredation_tbl';
    public $primaryKey = 'accredatation_id';
    public $timestamps = false;
    protected $fillable = [
        'ind_id',
        'accredatation_name',
        'accredatation_year'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndividualsUse extends Model
{
    protected $table = 'individuals_use_tbl';
    public $primaryKey = 'use_id';
    public $timestamps = false;
    protected $fillable = [
        'indp_id',
        'use_name',
        'use_area',
        'use_units'
    ];
}

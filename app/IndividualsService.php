<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndividualsService extends Model
{
    protected $table = 'individuals_service_tbl';
    public $primaryKey = 'serv_id';
    public $timestamps = false;
    protected $fillable = [
        'indp_id',
        'service_name',
        'from',
        'until'
    ];
}

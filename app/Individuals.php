<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Individuals extends Model
{
    protected $table = 'individuals_tbl';
    public $primaryKey = 'ind_id';
    protected $fillable = [
        'first_name',
        'last_name',
        'seniority',
        'services'
    ];
}

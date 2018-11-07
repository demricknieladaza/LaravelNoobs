<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndividualsAwards extends Model
{
    protected $table = 'individuals_awards_tbl';
    public $primaryKey = 'award_id';
    public $timestamps = false;
    protected $fillable = [
        'ind_id',
        'award_name',
        'awarded_by',
        'award_year',
        'award_details'
    ];
}

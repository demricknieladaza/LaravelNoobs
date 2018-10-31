<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrganisationAwards extends Model
{
    protected $table = 'organisation_awards_tbl';
    public $primaryKey = 'oa_id';
    public $timestamps = false;
    protected $fillable = [
        'org_id',
        'award_name',
        'award_details',
        'award_year'
    ];
}

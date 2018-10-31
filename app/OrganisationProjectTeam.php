<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrganisationProjectTeam extends Model
{
    protected $table = 'organisation_project_team_tbl';
    public $primaryKey = 'opt_id';
    public $timestamps = false;
    protected $fillable = [
        'op_id',
        'position',
        'company'
    ];
}

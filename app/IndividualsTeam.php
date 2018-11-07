<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndividualsTeam extends Model
{
    protected $table = 'individuals_team_tbl';
    public $primaryKey = 'team_id';
    public $timestamps = false;
    protected $fillable = [
        'indp_id',
        'position',
        'company'
    ];

}

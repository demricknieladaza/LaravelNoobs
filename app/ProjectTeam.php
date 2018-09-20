<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProjectInformations;

class ProjectTeam extends Model
{
    protected $table = 'project_team_tbl';
    public $primaryKey = 'project_team_id';
    public $timestamps = false;
    protected $fillable = [
        'position',
        'name'
    ];

    public function projectInformations(){
        return $this->belongsTo('App\ProjectInformations');
    }
}

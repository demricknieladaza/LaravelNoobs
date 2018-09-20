<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProjectInformations;

class Meetings extends Model
{
    protected $table = 'meetings_tbl';
    public $primaryKey = 'meeting_id';
    public $timestamps = false;
    protected $fillable = [
        'design_team_meeting',
        'project_progress_meeting',
        'project_record_id'
    ];

    public function projectInformations(){
        return $this->belongsTo('App\ProjectInformations');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProjectInformations;

class Milestones extends Model
{
    protected $table = 'milestones_tbl';
    public $primaryKey = 'milestone_id';
    public $timestamps = false;
    protected $fillable = [
        'riba_stage_one',
        'riba_stage_two',
        'riba_stage_three',
        'riba_stage_four',
        'project_record_id'
    ];

    public function projectInformations(){
        return $this->belongsTo('App\ProjectInformations');
    }
}

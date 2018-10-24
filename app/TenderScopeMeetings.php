<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tender;
use App\TenderMeetingsChoice;
use App\TenderMeetingsNum;

class TenderScopeMeetings extends Model
{
    protected $table = 'tender_scope_meetings_tbl';
    public $primaryKey = 'meeting_id';
    public $timestamps = false;
    protected $fillable = [
        'tender_id',
        'pre_app_purpose',
        'pre_app_attendees',
        'pre_app_assumed_duration',
        'pre_app_reoccurence',
        'site_visits_purpose',
        'site_visits_attendees',
        'site_visits_assumed_duration',
        'site_visits_reoccurence',
        'riba_purpose',
        'riba_attendees',
        'riba_assumed_duration',
        'riba_occurence',
        'inspection_purpose',
        'inspection_attendees',
        'inspection_assumed_duration',
        'inspection_reoccurence',
        'pre_app_choice',
        'pre_app_num',
        'site_visits_choice',
        'site_visits_num',
        'riba_choice',
        'riba_num',
        'site_inspection_choice',
        'site_inspection_num'
        
    ];

    public function tender(){
        return $this->belongsTo('App\Tender');
    }

    public function tenderMeetingsChoice(){
        return $this->hasMany('App\TenderMeetingsChoice');
    }

    public function tenderMeetingsNum(){
        return $this->hasMany('App\TenderMeetingsNum');
    }
}

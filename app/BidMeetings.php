<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BidMeetings extends Model
{
    protected $table = 'bid_meetings_tbl';
    public $primaryKey = 'bid_meet_tbl';
    protected $fillable = [
        'tender_id',
        'user_id',
        'pre_application_meetings',
        'site_visits',
        'riba_stage',
        'site_inspection'
    ];
}

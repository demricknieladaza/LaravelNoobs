<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TenderScopeMeetings;

class TenderMeetingsChoice extends Model
{
    protected $table = 'tender_meetings_choice_tbl';
    public $primaryKey = 'choice_id';
    public $timestamps = false;
    protected $fillable = [
        'meeting_id',
        'row_name',
        'choice'
    ];

    public function tenderScopeMeetings(){
        return $this->belongsTo('App\TenderScopeMeetings');
    }
}

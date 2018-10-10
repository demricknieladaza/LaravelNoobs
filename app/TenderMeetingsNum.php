<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TenderScopeMeetings;

class TenderMeetingsNum extends Model
{
    protected $table = 'tender_meetings_num_tbl';
    public $primaryKey = 'num_id';
    public $timestamps = false;
    protected $fillable = [
        'meeting_id',
        'row_name',
        'num'
    ];

    public function tenderScopeMeetings(){
        return $this->belongsTo('App\TenderScopeMeetings');
    }
}

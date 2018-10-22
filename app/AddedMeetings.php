<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddedMeetings extends Model
{
    protected $table = 'tender_added_meetings_tbl';
    public $timestamps = false;
    protected $fillable = [
        'tender_id',
        'name',
        'purpose',
        'attendees',
        'duration',
        'reoccurence',
        'arrange',
        'num'
    ];
    
}

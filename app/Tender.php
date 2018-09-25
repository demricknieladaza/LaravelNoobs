<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProjectInformations;
use App\TenderAppointment;
use App\TenderQualityAssurance;

class Tender extends Model
{
    protected $table = 'tender_tbl';
    public $primaryKey = 'tender_id';
    protected $fillable = [
        'project_record_id',
        'services',
        'status',
        'start',
        'end',
        'time_remaining',
        'bids_received',
        'queries_received'
    ];

    public function projectInformations(){
        return $this->belongsTo('App\ProjectInformations');
    }

    public function tenderAppointment(){
        return $this->hasOne('App\TenderAppointment');
    }

    public function tenderQualityAssurance(){
        return $this->hasOne('App\TenderQualityAssurance');
    }
}

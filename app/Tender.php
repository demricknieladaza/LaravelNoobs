<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProjectInformations;
use App\TenderAppointment;
use App\TenderQualityAssurance;
use App\TenderEvaluation;
use App\TenderScopeDeliverables;
use App\TenderDesignConsiderations;
use App\TenderScopeAdvise;

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

    public function tenderEvaluation(){
        return $this->hasOne('App\TenderEvaluation');
    }

    public function tenderScopeDeliverables(){
        return $this->hasOne('App\TenderScopeDeliverables');
    }

    public function tenderDesignConsiderations(){
        return $this->hasOne('App\TenderDesignConsiderations');
    }

    public function tenderScopeAdvise(){
        return $this->hasOne('App\TenderScopeAdvise');
    }
}

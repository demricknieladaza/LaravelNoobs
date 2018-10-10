<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tender;
use App\TenderDeliverablesRaci;
use App\TenderDeliverablesNum;

class TenderScopeDeliverables extends Model
{
    protected $table = 'tender_scope_deliverables_tbl';
    public $primaryKey = 'deliverables_id';
    public $timestamps = false;
    protected $fillable = [
        'tender_id',
        'strategic_brief',
        'project_programme',
        'feasibility_study',
        'design_responsibility',
        'site_information',
        'information_exhange_strategy',
        'project_brief',
        'risk_assessment',
        'handover_strategy',
        'project_execution_plan',
        'design_proposal'
    ];
    
    public function tender(){
        return $this->belongsTo('App\Tender');
    }

    public function tenderDeliverablesRaci(){
        return $this->hasOne('App\TenderDeliverablesRaci');
    }

    public function tenderDeliverablesNum(){
        return $this->hasOne('App\TenderDeliverablesNum');
    }

}

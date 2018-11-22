<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tender;

class TenderEvaluation extends Model
{
    protected $table = 'tender_evaluation_tbl';
    public $primaryKey = 'tender_eval_id';
    public $timestamps = false;
    protected $fillable = [
        'qualitative',
        'quantitative',
        'risk',
        'orginisation',
        'organisation_project_exp',
        'organisation_variety_of_services',
        'organisation_awards',
        'organisation_accreditations',
        'orgranisation_relationship',
        'individual',
        'individual_project_exp',
        'individual_relevant_exp',
        'individual_industry_exp',
        'individual_awards',
        'individual_accrediations',
        'individual_relationship',
        'individual_communication_skills',
        'individual_people_management',
        'individual_time_management',
        'individual_pro_active',
        'individual_social_behavior',
        'individual_hard_skills',
        'insurances',
        'bonds',
        'third_parties',
        'limit_of_liability',
        'net_contribution_clause'

    ];

    public function tender(){
        return $this->belongsTo('App\Tender');
    }
}

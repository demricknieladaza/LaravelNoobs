<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tender;
use App\TenderQaStatements;

class TenderQualityAssurance extends Model
{
    protected $table = 'tender_quality_assurance_tbl';
    public $primaryKey = 'quality_id';
    public $timestamps = false;
    protected $fillable = [
        'tender_id',
        'created_by_fname',
        'created_by_lname',
        'date_created',
        'checked_fname',
        'checked_lname',
        'date_checked',
        'approved_by_fname',
        'approved_by_lname',
        'date_approved',
        'statement'
    ];

    public function tender(){
        return $this->belongsTo('App\Tender');
    }

    public function tenderQaStatements(){
        return $this->hasMany('App\TenderQaStatements');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TenderQualityAssurance;

class TenderQaStatements extends Model
{
    protected $table = 'tender_quality_assurance_statements_tbl';
    public $primaryKey = 'statement_id';
    public $timestamps = false;
    protected $fillable = [
        'quality_id',
        'statement'
    ];

    public function tenderQualityAssurance(){
        return $this->belongsTo('App\TenderQualityAssurance');
    }
}

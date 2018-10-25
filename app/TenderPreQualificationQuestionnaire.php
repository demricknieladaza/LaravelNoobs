<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TenderPreQualificationQuestionnaire extends Model
{
    protected $table = 'tender_pre_qualification_tbl';
    public $primaryKey = 'pre_id';
    public $timestamps = false;
    protected $fillable = [
        'tender_id',
        'question',
        'response'
    ];
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProjectInformations;

class TenderQuery extends Model
{
    protected $table = 'tender_queries_tbl';
    public $primaryKey = 'tender_query_id';
    public $timestamps = false;
    protected $fillable = [
        'project_record_id',
        'tender_id',
        'question',
        'response'
    ];

    public function projects(){
        return $this->belongsTo('App\ProjectInformations');
    }
}


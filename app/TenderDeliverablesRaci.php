<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TenderScopeDeliverables;

class TenderDeliverablesRaci extends Model
{
    protected $table = 'tender_deliverables_raci_tbl';
    public $primaryKey = 'raci_id';
    public $timestamps = false;
    protected $fillable = [
        'deliverables_id',
        'row_name',
        'raci'
    ];

    public function tenderScopeDeliverables(){
        return $this->belongsTo('App\TenderScopeDeliverables');
    }
}

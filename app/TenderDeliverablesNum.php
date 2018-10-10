<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TenderScopeDeliverables;

class TenderDeliverablesNum extends Model
{
    protected $table = 'tender_deliverables_num_tbl';
    public $primaryKey = 'num_id';
    public $timestamps = false;
    protected $fillable = [
        'deliverables_id',
        'row_name',
        'num'
    ];

    public function tenderScopeDeliverables(){
        return $this->belongsTo('App\TenderScopeDeliverables');
    }
}

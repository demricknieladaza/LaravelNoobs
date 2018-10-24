<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tender;

class TenderScopeAdvise extends Model
{
    protected $table = 'tender_scope_advise_on_tbl';
    public $primarKey = 'advise_id';
    public $timestamps = false;
    protected $fillable = [
        'tender_id',
        'advise_one',
        'advise_two',
        'advise_three',
        'advise_four',
        'advise_five',
        'advise_six',
        'monitor_one',
        'monitor_two',
        'monitor_three',
        'collab_one',
        'collab_two',
        'collab_three',
        'collab_four',
        'coordinate_one',
        'coordinate_two',
        'other_one',
        'other_two',
        'other_three',
        'other_four'
    ];

    public function tender(){
        return $this->belongsTo('App\Tender');
    }

}

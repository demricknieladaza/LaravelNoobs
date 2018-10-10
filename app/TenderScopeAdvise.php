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
        'advise_six'
    ];

    public function tender(){
        return $this->belongsTo('App\Tender');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tender;

class TenderDesignConsiderations extends Model
{
    protected $table = 'tender_scope_design_considerations_tbl';
    public $primaryKey = 'design_id';
    public $timestamps = false;
    protected $fillable = [
        'tender_id',
        'question_one_applies_to',
        'question_two_applies_to',
        'question_three_applies_to',
        'question_four_applies_to',
        'question_five_applies_to'
    ];
    

    public function tender(){
        return $this->belongsTo('App\Tender');
    }

}

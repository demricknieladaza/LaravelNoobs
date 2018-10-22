<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddedAdvise extends Model
{
    protected $table = 'tender_added_advice_tbl';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'num',
        'tender_id'
    ];
    
}

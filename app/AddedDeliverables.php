<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddedDeliverables extends Model
{
    protected $table = 'tender_added_deliverables_tbl';
    public $primaryKey = 'a_id';
    public $timestamps = false;
    protected $fillable = [
        'tender_id',
        'name',
        'details',
        'raci',
        'num'
    ];
    
}

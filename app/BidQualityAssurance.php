<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BidQualityAssurance extends Model
{
    protected $table = 'bid_quality_assurance_tbl';
    public $primaryKey = 'bid_assurance_id';
    public $timestamps = false;
    protected $fillable = [
        'tender_id',
        'created_by_fname',
        'created_by_sname',
        'created_by_date',
        'checked_by_fname',
        'checked_by_sname',
        'checked_by_date',
        'approved_by_fname',
        'approved_by_sname',
        'approved_by_date'
    ];
}

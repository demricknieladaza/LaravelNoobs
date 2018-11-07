<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bids extends Model
{
    protected $table = 'bid_records_tbl';
    public $primaryKey = 'bid_id';
    protected $fillable = [
        'project_record_id',
        'tender_id',
        'user_id'
    ];
}

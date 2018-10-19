<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DraftedTenders extends Model
{
    protected $table = 'drafted_tenders_tbl';
    public $primaryKey = 'dt_id';
    public $timestamps = false;
    protected $filable = [
        'user_id',
        'project_record_id',
        'tender_id'
    ];
}

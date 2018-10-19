<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubmittedTenders extends Model
{
    protected $table = 'submitted_tenders_tbl';
    public $primaryKey = 'sb_id';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'project_record_id',
        'tender_id'
    ];

    
}

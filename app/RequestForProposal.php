<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestForProposal extends Model
{
    protected $table = 'request_for_proposal_tbl';
    public $primaryKey = 'request_id';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'tender_id',
        'project_record_id'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SavedTenders extends Model
{
    protected $table = 'saved_tenders_tbl';
    public $primaryKey = 'st_id';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'project_record_id',
        'tender_id'
    ];
}

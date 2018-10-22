<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddedDesign extends Model
{
    protected $table = 'tender_added_design_tbl';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'question',
        'tender_id'
    ];
    
}

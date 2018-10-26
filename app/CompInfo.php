<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compinfo extends Model
{
    protected $table = 'company_tbl';
    public $timestamps = false;
    protected $fillable = [
        'u_id',
        'comp_name',
        'comp_email',
        'created_at'
    ];
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    protected $table = 'organisation_tbl';
    public $primaryKey = 'org_id';
    protected $fillable = [
        'company_name',
        'office_address',
        'logo',
        'user_id'
    ];
}

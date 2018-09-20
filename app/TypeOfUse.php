<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProjectInformations;

class TypeOfUse extends Model
{
    protected $table = 'type_of_use_tbl';
    public $primaryKey = 'use_id';
    public $timestamps = false;
    protected $fillable = [
        'use_id',
        'use_name',
        'use_area',
        'use_units',
        'use_type',
        'project_record_id'
    ];

    public function projectInformations(){
        return $this->belongTo('App\ProjectInformations');
    }
}

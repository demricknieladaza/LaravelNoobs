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
        'use_area_one',
        'use_units_one',
        'use_type_one',
        'use_area_two',
        'use_units_two',
        'use_type_two',
        'use_area_three',
        'use_units_three',
        'use_type_three',        
        'use_area_four',
        'use_units_four',
        'use_type_four',
        'project_record_id'
    ];

    public function projectInformations(){
        return $this->belongTo('App\ProjectInformations');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProjectInformations;

class AreaSpecificInformation extends Model
{
    protected $table = 'area_specific_information_tbl';
    public $primaryKey = 'area_id';
    public $timestamps = false;
    protected $fillable = [
            'adjacent_uses', 'history', 'project_record_id'
    ];

    public function projectInformations(){
        return $this->belongsTo('App\ProjectInformations');
    }
}

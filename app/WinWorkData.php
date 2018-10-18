<?php

namespace App;
use app\ProjectInformations;

use Illuminate\Database\Eloquent\Model;

class WinWorkData extends Model
{
    protected $table = 'winwork_data_tbl';
    public $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'project_record_id',
        'first_tender',
        'tender_count'
    ];

    public function projectInformations(){
        return $this->belongsTo('App\ProjectInformations', 'project_record_id');
    }
}

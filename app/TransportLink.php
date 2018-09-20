<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProjectInformations;

class TransportLink extends Model
{
    protected $table = 'transport_link_tbl';
    public $primaryKey = 'transport_id';
    public $timestamps = false;
    protected $fillable = [
        'main_road', 
        'tube_station_one', 
        'tube_station_two', 
        'bus_lines',
        'project_record_id'
    ];
    
    public function projectInformations(){
        return $this->belongsTo('App\ProjectInformations');
    }
}

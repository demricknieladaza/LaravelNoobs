<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tender;
use App\TenderBonds;

class TenderAppointment extends Model
{
    protected $table = 'tender_appointment_tbl';
    public $primaryKey = 'tender_appointment_id';
    public $timestamps = false;
    protected $fillable = [
        
        'insurance_name',
        'insurance_level',
        'tender_id',
        'bonds_id',
        'collateral_warranties',
        'limit_of_liability'
        
    ];

    public function tender(){
        return $this->belongsTo('App\Tender');
    }

    public function tenderBonds(){
        return $this->hasMany('App\TenderBonds');
    }
}

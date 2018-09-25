<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TenderAppointment;

class TenderBonds extends Model
{
    protected $table = 'tender_bonds_tbl';
    public $primaryKey = 'bonds_id';
    public $timestamps = false;
    protected $fillable = [
        'tender_appointment_id',
        'bond_name'
    ];

    public function tenderAppointment(){
        return $this->belongsTo('App\TenderAppointment');
    }
}

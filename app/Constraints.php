<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProjectInformations;

class Constraints extends Model
{
    protected $table = 'constraints_tbl';
    public $primaryKey = 'constraint_id';
    public $timestamps = false;
    protected $fillable = [
        'constraint_one',
        'constraint_two',
        'constraint_three',
        'project_record_id'
    ];

    public function projectInformations(){
        return $this->belongsTo('App\ProjectInformations');
    }
}

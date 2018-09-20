<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TranportLink;
use App\AreaSpecificInformation;
use App\Constraints;
use App\TypeOfUse;
use App\Milestones;
use App\Meetings;
use App\UserAccountsModel;
use App\ProjectTeam;
use App\TenderQuery;


class ProjectInformations extends Model
{
    protected $table = 'project_information_tbl';
    public $primaryKey = 'project_record_id';
    protected $fillable = [
        'project_title', 
        'project_id',
        'type_of_development',
        'construction_value',
        'procurement_route',
        'user_id' 
    ];

    public function tranportLink(){
        return $this->belongsTo('App\TransportLink');
    }

    public function areaSpecificInformation(){
        return $this->belongsTo('App\AreaSpecificInformation');
    }

    public function constraints(){
        return $this->belongsTo('App\Constraints');
    }

    public function typeOfUse(){
        return $this->belongsTo('App\TypeOfUse');
    }

    public function milestones(){
        return $this->belongsTo('App\Milestones');
    }

    public function meetings(){
        return $this->belongsTo('App\Meetings');
    }

    public function projectTeam(){
        return $this->belongsTo('App\ProjectTeam');
    }

    public function user(){
        return $this->belongsTo('App\UserAccountsModel');
    }

    public function tenderQuery(){
        return $this->belongsTo('App\TenderQuery');
    }

}

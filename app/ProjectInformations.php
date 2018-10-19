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
use App\Tender;
use App\WinWorkData;


class ProjectInformations extends Model
{
    protected $table = 'project_information_tbl';
    public $primaryKey = 'project_record_id';
    public $timestamps = true;
    protected $fillable = [
        'project_title', 
        'type_of_development',
        'construction_value',
        'procurement_route',
        'user_id' 
    ];

    public function tranportLink(){
        return $this->hasOne('App\TransportLink');
    }

    public function areaSpecificInformation(){
        return $this->hasOne('App\AreaSpecificInformation');
    }

    public function constraints(){
        return $this->hasOne('App\Constraints');
    }

    public function typeOfUse(){
        return $this->hasOne('App\TypeOfUse', 'project_record_id');
    }

    public function milestones(){
        return $this->hasOne('App\Milestones');
    }

    public function meetings(){
        return $this->hasOne('App\Meetings');
    }

    public function projectTeam(){
        return $this->hasOne('App\ProjectTeam');
    }

    public function user(){
        return $this->hasOne('App\UserAccountsModel');
    }

    public function tenderQuery(){
        return $this->hasOne('App\TenderQuery');
    }

    public function tender(){
        return $this->hasMany('App\Tender', 'project_record_id');
    }

    public function winWorkData(){
        return $this->hasMany('App\WinWorkData', 'project_record_id');
    }

}

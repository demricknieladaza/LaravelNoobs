<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

//MODELS
use App\Organisation;
use App\OrganisationServices;
use App\OrganisationAwards;
use App\OrganisationProject;
use App\OrganisationProjectUse;
use App\OrganisationProjectService;
use App\OrganisationProjectTeam;


class OrganisationController extends Controller
{
    public function organisationStore(Request $request){

        $user = $request->session()->get('id');

        $organisation = new Organisation;
        $organisation->company_name = $request->company_name;
        $organisation->office_address = $request->office_address;
        $organisation->user_id = $user;
        $organisation->save();

        $org_services = $request->services;
        $org_services = json_decode($org_services);
        for($counter = 0; $counter < count($org_services); $counter++){

            $orgservices = new OrganisationServices;
            $orgservices->org_id = $organisation->org_id;
            $orgservices->service = $org_services[$counter]->name;
            $orgservices->from = $org_services[$counter]->dfrom;
            $orgservices->until = $org_services[$counter]->duntil;
            $orgservices->save();

        }

        $org_awards = $request->awards;
        $org_awards = json_decode($org_awards);
        for($counter = 0; $counter < count($org_awards); $counter++){

            $orgawards = new OrganisationAwards;
            $orgawards->org_id = $organisation->org_id;
            $orgawards->award_name = $org_awards[$counter]->name;
            $orgawards->award_details = $org_awards[$counter]->details;
            $orgawards->award_year = $org_awards[$counter]->year;
            $orgawards->save();

        }

        $orgproj = new OrganisationProject;
        $orgproj->org_id = $organisation->org_id;
        $orgproj->project_title = $request->project_title;
        $orgproj->project_value = $request->project_value;

        $dev = $request->development;
        $dev = json_decode($dev);
        $devchecked = "";
        for($counter = 0; $counter < count($dev); $counter++){
            $devchecked .= $dev[$counter] . ",";
        }
        $devchecked = substr($devchecked, 0, -1);
        $orgproj->type_of_development = $devchecked;
        $orgproj->project_description = $request->project_description;
        $orgproj->save();


        $org_use = $request->typeofuse;
        $org_use = json_decode($org_use);

        for($counter = 0; $counter < count($org_use); $counter++){
            $orguse = new OrganisationProjectUse;
            $orguse->op_id = $orgproj->op_id;
            $orguse->service = $org_use[$counter]->name;
            $orguse->area = $org_use[$counter]->area;
            $orguse->units = $org_use[$counter]->units;
            $orguse->save();
        }

        $org_provided = $request->provservices;
        $org_provided = json_decode($org_provided);

        for($counter = 0; $counter < count($counter); $counter++){
            $orgprovided = new OrganisationProjectService;
            $orgprovided->op_id = $orgproj->op_id;
            $orgprovided->service = $org_provided[$counter]->name;
            $orgprovided->from = $org_provided[$counter]->dfrom;
            $orgprovided->until = $org_provided[$counter]->duntil;
            $orgprovided->save();
        }

        $org_team = $request->projmem;
        $org_team = json_decode($org_team);

        for($counter = 0; $counter < count($org_team); $counter++){
            $orgteam = new OrganisationProjectTeam;
            $orgteam->op_id = $orgproj->op_id;
            $orgteam->position = $org_team[$counter]->name;
            $orgteam->company = $org_team[$counter]->compname;
            $orgteam->save();
        }



        return $org_services[0]->name;
        //var_dump($org_services);


    }
}

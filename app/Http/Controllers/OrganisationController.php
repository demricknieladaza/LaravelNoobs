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
        $orgid = 0;
        $check = Organisation::where('user_id', $request->session()->get('id'))->get();
        if(count($check) == 1){
            $organisation = Organisation::where('user_id', $request->session()->get('id'))->first();
            $organisation->update(
                [
                    'company_name' => $request->company_name,
                    'office_address' => $request->office_address
                ]
            );
            $orgid = $organisation->org_id;
        }
        else{
            $organisation = new Organisation;
            $organisation->company_name = $request->company_name;
            $organisation->office_address = $request->office_address;
            if($request->hasFile('logo_img')){
                $filenameWithExt = $request->file('logo_img')->getClientOriginalName();

                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

                $extension = $request->file('logo_img')->getClientOriginalExtension();

                $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
                
                $path = $request->file('logo_img')->storeAs('public/organisation/logo', $filenameToStore); 
                $organisation->logo = $filenameToStore;
            }

            
            $organisation->user_id = $user;
            $organisation->save();
            $orgid = $organisation->org_id;
        }

        // 

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

        $name_of_files = "";
        $files = $request->file('project_images');
        foreach($files as $file){
            $filenameWithExt = $file->getClientOriginalName();
    
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        
            $extension = $file->getClientOriginalExtension();
        
            $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
            
            $path = $file->storeAs('public/organisation/projectImages', $filenameToStore); 
            $name_of_files .= $filenameToStore . "/";
        }

        $name_of_files = substr($name_of_files, 0, -1);
        $orgproj->project_images = $name_of_files;
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

        for($counter = 0; $counter < count($org_provided); $counter++){
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

        return 'yes';
        // echo $link;
        // return redirect('/dashboard/organisation/'.$request->session()->get('id'));
        // var_dump($org_services);


    }

    public function addproject(Request $request)
    {
        
        $orgproj = new OrganisationProject;
        $orgproj->org_id = $request->org_id;
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

        $name_of_files = "";
        $files = $request->file('project_images');

        if($request->hasfile('project_images')){
            foreach($files as $file){
                $filenameWithExt = $file->getClientOriginalName();
            
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            
                $extension = $file->getClientOriginalExtension();
            
                $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
                
                $path = $file->storeAs('public/organisation/projectImages', $filenameToStore); 
                $name_of_files .= $filenameToStore . "/";
            }
        }

        $name_of_files = substr($name_of_files, 0, -1);
        $orgproj->project_images = $name_of_files;
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

        for($counter = 0; $counter < count($org_provided); $counter++){
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
    }

    public function updateorg(Request $request)
    {
        $user = $request->session()->get('id');
        $orgid = 0;
        $check = Organisation::where('user_id', $request->session()->get('id'))->get();
        if(count($check) == 1){
            $organisation = Organisation::where('user_id', $request->session()->get('id'))->first();
            $organisation->update(
                [
                    'company_name' => $request->company_name,
                    'office_address' => $request->office_address
                ]
            );
            $orgid = $organisation->org_id;
        }
        else{
            $organisation = new Organisation;
            $organisation->company_name = $request->company_name;
            $organisation->office_address = $request->office_address;
            if($request->hasFile('logo_img')){
                $filenameWithExt = $request->file('logo_img')->getClientOriginalName();

                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

                $extension = $request->file('logo_img')->getClientOriginalExtension();

                $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
                
                $path = $request->file('logo_img')->storeAs('public/organisation/logo', $filenameToStore); 
                $organisation->logo = $filenameToStore;
            }

            
            $organisation->user_id = $user;
            $organisation->save();
            $orgid = $organisation->org_id;
        }

        // 

        $org_services = $request->services;
        $org_services = json_decode($org_services);
        for($counter = 0; $counter < count($org_services); $counter++){
            if($org_services[$counter]->editable == "true"){
                OrganisationServices::where('os_id', $org_services[$counter]->myid )
                ->update(
                    [
                        'service' => $org_services[$counter]->name,
                        'from' => $org_services[$counter]->dfrom,
                        'until' => $org_services[$counter]->duntil
                    ]
                );
            }
            else{
                $orgservices = new OrganisationServices;
                $orgservices->org_id = $organisation->org_id;
                $orgservices->service = $org_services[$counter]->name;
                $orgservices->from = $org_services[$counter]->dfrom;
                $orgservices->until = $org_services[$counter]->duntil;
                $orgservices->save();
            }
        }

        $org_awards = $request->awards;
        $org_awards = json_decode($org_awards);
        for($counter = 0; $counter < count($org_awards); $counter++){
            if($org_awards[$counter]->editable == "true"){
                OrganisationAwards::where('oa_id', $org_awards[$counter]->myid )
                ->update(
                    [
                        'award_name' => $org_awards[$counter]->name,
                        'award_details' => $org_awards[$counter]->details,
                        'award_year' => $org_awards[$counter]->year
                    ]
                );
            }
            else{
                $orgawards = new OrganisationAwards;
                $orgawards->org_id = $organisation->org_id;
                $orgawards->award_name = $org_awards[$counter]->name;
                $orgawards->award_details = $org_awards[$counter]->details;
                $orgawards->award_year = $org_awards[$counter]->year;
                $orgawards->save();
            }
        }

        return 'Organisation has been Updated';
    }

    public function updatemyproj(Request $request){

        $name_of_files = "";
        
        if($request->hasFile('project_images')){
            $pics = OrganisationProject::where('op_id',$request->projidedit)->pluck('project_images');
            $dirs = explode('/', $pics);
            foreach($dirs as $pic){
                Storage::delete('public/site_plan/'.$pic);
            }
            $files = $request->file('project_images');
            foreach($files as $file){
                $filenameWithExt = $file->getClientOriginalName();
            
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            
                $extension = $file->getClientOriginalExtension();
            
                $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
                
                $path = $file->storeAs('public/organisation/projectImages', $filenameToStore); 
                $name_of_files .= $filenameToStore . "/";
            }
            $name_of_files = substr($name_of_files, 0, -1);

            $dev = $request->development;
            $dev = json_decode($dev);
            $devchecked = "";
            for($counter = 0; $counter < count($dev); $counter++){
                $devchecked .= $dev[$counter] . ",";
            }
            $devchecked = substr($devchecked, 0, -1);


            OrganisationProject::where('op_id',$request->projidedit)
                ->update(
                    [
                        'project_title' => $request->project_title,
                        'project_value' => $request->project_value,
                        'type_of_development' => $devchecked,
                        'project_description' => $request->project_description,
                        'project_images' => $name_of_files
                    ]
                );
        }
        else{
            $dev = $request->development;
            $dev = json_decode($dev);
            $devchecked = "";
            for($counter = 0; $counter < count($dev); $counter++){
                $devchecked .= $dev[$counter] . ",";
            }
            $devchecked = substr($devchecked, 0, -1);


            OrganisationProject::where('op_id',$request->projidedit)
                ->update(
                    [
                        'project_title' => $request->project_title,
                        'project_value' => $request->project_value,
                        'type_of_development' => $devchecked,
                        'project_description' => $request->project_description
                    ]
                );
        }

        

        $org_use = $request->typeofuse;
        $org_use = json_decode($org_use);

        for($counter = 0; $counter < count($org_use); $counter++){
            if($org_use[$counter]->editable == "true"){
                // echo $org_use[$counter]->name;
                OrganisationProjectUse::where('opu_id',$org_use[$counter]->myid)
                    ->update(
                        [
                            'service' => $org_use[$counter]->name,
                            'area' => $org_use[$counter]->area,
                            'units' => $org_use[$counter]->units
                        ]
                    );
            }
            else{
                $orguse = new OrganisationProjectUse;
                $orguse->op_id = $request->projidedit;
                $orguse->service = $org_use[$counter]->name;
                $orguse->area = $org_use[$counter]->area;
                $orguse->units = $org_use[$counter]->units;
                $orguse->save();
            }
            
        }

        $org_provided = $request->provservices;
        $org_provided = json_decode($org_provided);

        for($counter = 0; $counter < count($org_provided); $counter++){

            if($org_provided[$counter]->editable == "true"){
                OrganisationProjectService::where('ops_id',$org_provided[$counter]->myid)
                    ->update(
                        [
                            'service' => $org_provided[$counter]->name,
                            'from' => $org_provided[$counter]->dfrom,
                            'until' => $org_provided[$counter]->duntil
                        ]
                    );
            }
            else{
                $orgprovided = new OrganisationProjectService;
                $orgprovided->op_id = $request->projidedit;
                $orgprovided->service = $org_provided[$counter]->name;
                $orgprovided->from = $org_provided[$counter]->dfrom;
                $orgprovided->until = $org_provided[$counter]->duntil;
                $orgprovided->save();
            }
        }

        $org_team = $request->projmem;
        $org_team = json_decode($org_team);

        for($counter = 0; $counter < count($org_team); $counter++){
            if($org_team[$counter]->editable == "true"){
                OrganisationProjectTeam::where('opt_id',$org_team[$counter]->myid)
                    ->update(
                        [
                            'position' => $org_team[$counter]->name,
                            'company' => $org_team[$counter]->compname
                        ]
                    );
            }
            else{
                $orgteam = new OrganisationProjectTeam;
                $orgteam->op_id = $request->projidedit;
                $orgteam->position = $org_team[$counter]->name;
                $orgteam->company = $org_team[$counter]->compname;
                $orgteam->save();
            }
            
        }
    }

    public function getmyorganisation(Request $request){
        $myorg = Organisation::where('user_id', $request->session()->get('id'))->get();
        // echo $myorg[0]['org_id'];
        // $myorg = Organisation::all();
        if(count($myorg) == 0){
            $org = new Organisation;
            $org->user_id = $request->session()->get('id');
            $org->save();
            $myorg = Organisation::where('user_id', $request->session()->get('id'))->get();
        }
        $orgy = [];
        $services = "";
        $awards = "";
        $projects = [];
        if(count($myorg)==1){
            $services = DB::table('organisation_services_tbl')
                ->where('org_id',$myorg[0]['org_id'])
                ->get();
            $awards = DB::table('organisation_awards_tbl')
                ->where('org_id',$myorg[0]['org_id'])
                ->get();
            $projects = DB::table('organisation_project_tbl')
                ->where('org_id',$myorg[0]['org_id'])
                ->get();
        }

        // print_r($orgy);
        // echo count($myorg);
        return view('organisation')->with([
            'org' => $myorg,
            'services' => $services,
            'awards' => $awards,
            'projects' => $projects,
        ]);
    }

    public function getproj($id){
        // echo $id;
        $use = DB::table('organisation_project_use_tbl')
                ->where('op_id',$id)
                ->get();
        $proj = DB::table('organisation_project_tbl')
                ->where('op_id',$id)
                ->get();
        $serv = DB::table('organisation_project_service_tbl')
                ->where('op_id',$id)
                ->get();
        $team = DB::table('organisation_project_team_tbl')
                ->where('op_id',$id)
                ->get();

        return response()->json(array(
            'success' => true,  
            'use' => $use,
            'proj' => $proj,
            'serv' => $serv,
            'team' => $team
        ), 200);
    }
}

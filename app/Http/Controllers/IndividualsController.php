<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use App\Individuals;
use App\IndividualsAccredatation;
use App\IndividualsDegrees;
use App\IndividualsService;
use App\IndividualsTeam;
use App\IndividualsUse;
use App\IndividualsAwards;
use App\IndividualsProject;


class IndividualsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->session()->get('id');
        $data = Individuals::where('user_id', $user)->get();
        return view('individuals')->with('data',$data);
    }

    public function getmyindividual(Request $request){
        $indi = Individuals::where('user_id', $request->session()->get('id'))->get();
        $id = DB::table('organisation_tbl')->where('user_id', $request->session()->get('id'))->first();
        if(count($id)==0){
            $dept = [];
        }else{
            $dept = DB::table('organisation_department_tbl')->where('org_id',$id->org_id)->get();
        }
        
        // echo($dept);
        return view('individuals')->with([
            'indi' => $indi,
            'dept' => $dept,
            'id' => $id
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new = new Individuals;
        //Name
        $new->first_name = $request->input('first_name');
        $new->sur_name = $request->input('sur_name');
        $new->department = $request->input('department');
        $new->email = $request->input('email');
        
        //Images
        $name_of_files = "";

        if($request->hasFile('images')){
            $files = $request->file('images');
            foreach($files as $file){
                $filenameWithExt = $file->getClientOriginalName();
        
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            
                $extension = $file->getClientOriginalExtension();
            
                $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
                
                $path = $file->storeAs('public/images', $filenameToStore); 
                // $new->site_plan = $filenameToStore;
                $name_of_files .= $filenameToStore . "/";
            }

        }
        $name_of_files = substr($name_of_files, 0, -1);
        $new->images = $name_of_files;
        //Accredation
        $accredation = $request->accredation;
        $accredation_storage = ""; 
        for($counter = 0; $counter < count($accredation); $counter++){
                $accredation_storage .= $accredation[$counter] . "/";
        }
        $accredation_year = $request->accre_year;
        $year_accre = "";
        for($counter = 0; $counter < count($accredation_year); $counter++){
            $year_accre .= $accredation_year[$counter] . "/";
        }
        $year_accre = substr($year_accre, 0, -1);
        $accredation_storage = substr($accredation_storage, 0, -1);
        
        $new->accredation = $accredation_storage;
        $new->accredation_year = $year_accre;
        //Degree
        $degree = $request->degree;
        $degree_storage = "";
        for($counter = 0; $counter < count($degree); $counter++){
            $degree_storage .= $degree[$counter] . "/";
        
        }
        $degree_year = $request->degree_year;
        $degree_year_storage = "";
        for($counter = 0; $counter < count($degree_year); $counter++){
            $degree_year_storage .= $degree_year[$counter] . "/";
        
        }
        $degree_name = $request->degree_name;
        $degree_name_storage = "";
        for($counter = 0; $counter < count($degree_name); $counter++){
            $degree_name_storage .= $degree_name[$counter] . "/";
        
        }
        $degree_storage = substr($degree_storage, 0, -1);
        $degree_year_storage = substr($degree_year_storage, 0, -1);
        $degree_name_storage = substr($degree_name_storage, 0, -1);
        $new->degree = $degree_storage;
        $new->degree_year = $degree_year_storage;
        $new->degree_name = $degree_name_storage;
        //Seniority
        $new->seniority = $request->get('seniority');
        //Awards
        $award_name = $request->award_name;
        $award_name_storage = "";
        for($counter = 0; $counter < count($award_name); $counter++){
            $award_name_storage .= $award_name[$counter] . "/";
        
        }
        $awarded_by = $request->awarded_by;
        $awarded_by_storage = "";
        for($counter = 0; $counter < count($awarded_by); $counter++){
            $awarded_by_storage .= $awarded_by[$counter] . "/";
        
        }
        $award_year = $request->year_awarded;
        $award_year_storage = "";
        for($counter = 0; $counter < count($award_year); $counter++){
            $award_year_storage .= $award_year[$counter] . "/";
        
        }
        $award_details = $request->award_details;
        $award_details_storage = "";
        for($counter = 0; $counter < count($award_details); $counter++){
            $award_details_storage .= $award_details[$counter] . "/";
        
        }
        $award_name_storage = substr($award_name_storage, 0, -1);
        $awarded_by_storage = substr($awarded_by_storage, 0, -1);
        $award_year_storage = substr($award_year_storage, 0, -1);
        $award_details_storage = substr($award_details_storage, 0, -1);

        $new->award_name = $award_name_storage;
        $new->award_by = $awarded_by_storage;
        $new->year_awarded = $award_year_storage;
        $new->award_details = $award_details_storage;
        //Services Offered
        $services = $request->services_offered;
        $services_storage = "";
        for($counter = 0; $counter < count($services); $counter++){
            $services_storage .= $services[$counter] . "/";
        
        }
        $services_storage = substr($services_storage, 0, -1);
        $new->services_offered = $services_storage;
        //Project Experience
        $new->project_experience = $request->get('project_experience');
        //Type Of Use
        $new->type_of_uses = $request->get('type_of_use');
        //Service
        $new->service = $request->get('service');
        $new->service_from = $request->get('service_from');
        $new->service_until = $request->get('service_until');
        //Type of Development
        $new->type_of_development = $request->get('type_of_development');
        //Project Description
        $new->project_description = $request->get('project_description');
        //Project Images
        $project_files = "";

        if($request->hasFile('project_images')){
            $files = $request->file('project_images');
            foreach($files as $file){
                $filenameWithExt = $file->getClientOriginalName();
        
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            
                $extension = $file->getClientOriginalExtension();
            
                $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
                
                $path = $file->storeAs('public/project_images', $filenameToStore); 
                // $new->site_plan = $filenameToStore;
                $project_files .= $filenameToStore . "/";
            }

            // for($counter = 0; $counter < count($files); $counter++){
            //         $name_of_files .= $files[$counter] . ",";
            // }

        }
        $project_files = substr($project_files, 0, -1);
        $new->project_images = $project_files;
        $new->team_member = $request->get('team_member');
        $new->company_name = $request->get('company');
        $new->save();

        $user = $request->session()->get('id');

        $data = Individuals::where('user_id', $user)->get();
        return view('individuals')->with('data',$data);
    }

    public function getmyindividualinfo(Request $request){
        $individual = DB::table('individuals_tbl')->where('ind_id', $request->id)->get();
        $accredation = DB::table('individuals_accredation_tbl')->where('ind_id', $request->id)->get();
        $degree = DB::table('individuals_degrees_tbl')->where('ind_id', $request->id)->get();
        $awards = DB::table('individuals_awards_tbl')->where('ind_id', $request->id)->get();

        $project = DB::table('individuals_project_tbl')->where('ind_id', $request->id)->get();

        return response()->json(array(
            'success' => true,  
            'id' => $individual,
            'accredation' => $accredation,
            'degree' => $degree,
            'awards' => $awards,
            'project' => $project
        ), 200);
    }

    public function updateindiproj(Request $request){
        

        $dev = $request->development;
        $dev = json_decode($dev);
        $new_dev = "";
        if(count($dev) != 0){
            for($counter = 0; $counter < count($dev); $counter++){
                $new_dev .= $dev[$counter] . ",";
            }
            $new_dev = substr($new_dev, 0, -1);
        }

        $name_of_files = "";
        $files = $request->file('upload_file');
        if($request->hasfile('upload_file')){
            foreach($files as $file){
            $filenameWithExt = $file->getClientOriginalName();
    
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        
            $extension = $file->getClientOriginalExtension();
        
            $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
            
            $path = $file->storeAs('public/individuals/projectImages', $filenameToStore); 
            $name_of_files .= $filenameToStore . "/";
        }
        }
        

        if($request->hasFile('file')){
            $filenameWithExt = $request->file('file')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('file')->getClientOriginalExtension();

            $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
            
            $path = $request->file('file')->storeAs('public/individuals/profileImg', $filenameToStore); 
            $ind_p->profile_image = $filenameToStore;
        }

        $name_of_files = substr($name_of_files, 0, -1);
        
        IndividualsProject::where('indp_id', $request->project_id)
            ->update([
                'project_title' => $request->project_title,
                'project_value' => $request->project_value,
                'type_of_development' => $request->new_dev,
                'project_description' => $request->project_description,
                'profile_images' => $request->name_of_files,
            ]);

        
        //Type of use
        $typ = $request->types;
        $typ = json_decode($typ);
        for($counter = 0; $counter < count($typ); $counter++){
            if($typ[$counter]->editable == "true"){
                IndividualsUse::where('use_id',$typ[$counter]->myid)
                    ->update([
                        'use_name' => $typ[$counter]->name,
                        'use_area' => $typ[$counter]->area,
                        'use_units' => $typ[$counter]->units
                    ]);
            }
            else{
                $indty = new IndividualsUse;
                $indty->indp_id = $request->project_id;
                $indty->use_name = $typ[$counter]->name;
                $indty->use_area = $typ[$counter]->area;
                $indty->use_units = $typ[$counter]->units;
                $indty->save();
            }
        }

        //Service Provided
        $pro = $request->provs;
        $pro = json_decode($pro);
        for($counter = 0; $counter < count($pro); $counter++){
            if($pro[$counter]->editable == "true"){
                IndividualsService::where('serv_id',$pro[$counter]->myid)
                    ->update([
                        'service_name' => $pro[$counter]->name,
                        'from' => $pro[$counter]->from,
                        'until' => $pro[$counter]->until,
                    ]);
            }
            else{
                $indpro = new IndividualsService;
                $indpro->indp_id = $request->project_id;
                $indpro->service_name = $pro[$counter]->name;
                $indpro->from = $pro[$counter]->from;
                $indpro->until = $pro[$counter]->until;
                $indpro->save();
            }
        }

        //Project Team
        $projt = $request->projteam;
        $projt = json_decode($projt);
        for($counter = 0; $counter < count($projt); $counter++){
            if($projt[$counter]->editable == "true"){
                IndividualsTeam::where('team_id',$projt[$counter]->myid)
                    ->update([
                        'position' => $projt[$counter]->name,
                        'company' => $projt[$counter]->compname
                    ]);
            }
            else{
                $indteam = new IndividualsTeam;
                $indteam->indp_id = $request->project_id;
                $indteam->position = $projt[$counter]->name;
                $indteam->company = $projt[$counter]->compname;
                $indteam->save();
            }
        }
    }

    public function individualgetproject(Request $request){
        $proj = DB::table('individuals_project_tbl')->where('indp_id',$request->id)->get();
        $use = DB::table('individuals_use_tbl')->where('indp_id',$request->id)->get();
        $service = DB::table('individuals_service_tbl')->where('indp_id',$request->id)->get();
        $team = DB::table('individuals_team_tbl')->where('indp_id',$request->id)->get();

        return response()->json(array(
            'success' => true,  
            'use' => $use,
            'service' => $service,
            'team' => $team,
            'proj' => $proj
        ), 200);
    }

    public function addindiproject(Request $request){
        $ind_p = new IndividualsProject;
        $ind_p->ind_id = $request->myiid;
        $ind_p->project_title = $request->project_title;
        $ind_p->project_value = $request->project_value;

        $dev = $request->development;
        $dev = json_decode($dev);
        $new_dev = "";
        if(count($dev) != 0){
            for($counter = 0; $counter < count($dev); $counter++){
                $new_dev .= $dev[$counter] . ",";
            }
            $new_dev = substr($new_dev, 0, -1);
            $ind_p->type_of_development = $new_dev;
        }
        $ind_p->type_of_development = $new_dev;
        $ind_p->project_description = $request->project_description;

        $name_of_files = "";
        $files = $request->file('upload_file');
        if($request->hasfile('upload_file')){
            foreach($files as $file){
            $filenameWithExt = $file->getClientOriginalName();
        
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        
            $extension = $file->getClientOriginalExtension();
        
            $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
            
            $path = $file->storeAs('public/individuals/projectImages', $filenameToStore); 
            $name_of_files .= $filenameToStore . "/";
        }
        }
        

        if($request->hasFile('file')){
            $filenameWithExt = $request->file('file')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('file')->getClientOriginalExtension();

            $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
            
            $path = $request->file('file')->storeAs('public/individuals/profileImg', $filenameToStore); 
            $ind_p->profile_image = $filenameToStore;
        }

        $name_of_files = substr($name_of_files, 0, -1);
        $ind_p->profile_images = $name_of_files;
        $ind_p->save();

        
        //Type of use
        $typ = $request->types;
        $typ = json_decode($typ);
        for($counter = 0; $counter < count($typ); $counter++){

            $indty = new IndividualsUse;
            $indty->indp_id = $ind_p->indp_id;
            $indty->use_name = $typ[$counter]->name;
            $indty->use_area = $typ[$counter]->area;
            $indty->use_units = $typ[$counter]->units;
            $indty->save();

        }

        //Service Provided
        $pro = $request->provs;
        $pro = json_decode($pro);
        for($counter = 0; $counter < count($pro); $counter++){

            $indpro = new IndividualsService;
            $indpro->indp_id = $ind_p->indp_id;
            $indpro->service_name = $pro[$counter]->name;
            $indpro->from = $pro[$counter]->from;
            $indpro->until = $pro[$counter]->until;
            $indpro->save();

        }

        //Project Team
        $projt = $request->projteam;
        $projt = json_decode($projt);
        for($counter = 0; $counter < count($projt); $counter++){

            $indteam = new IndividualsTeam;
            $indteam->indp_id = $ind_p->indp_id;
            $indteam->position = $projt[$counter]->name;
            $indteam->company = $projt[$counter]->compname;
            $indteam->save();

        }

        echo "saved";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function individualStore(Request $request){

        $user = $request->session()->get('id');

        $individual = new Individuals;
        $individual->first_name = $request->first_name;
        $individual->last_name = $request->last_name;
        $individual->seniority = $request->seniority_level;
        $new->department = $request->input('department');
        $new->email = $request->input('email');

        $service = $request->offeredservices;
        $new_service = "";
        if(count($service) != 0){
            for($counter = 0; $counter < count($service); $counter++){
                $new_service .= $service[$counter] . ",";
            }
            $new_service = substr($new_service, 0, -1);
            $individual->services = $new_service;
        }
        $individual->services = $new_service;
        $individual->user_id = $user;
        $individual->save();

        //Accredatation
        $accre = $request->accredatations;
        $accre = json_decode($accre);
        for($counter = 0; $counter < count($accre); $counter++){

            $indaccre = new IndividualsAccredatation;
            $indaccre->ind_id = $individual->ind_id;
            $indaccre->accredatation_name = $accre[$counter]->accredatations;
            $indaccre->accredatation_year = $accre[$counter]->year;
            $indaccre->save();

        }

        //Degrees
        $deg = $request->degrees;
        $deg = json_decode($deg);
        for($counter = 0; $counter < count($deg); $counter++){
            
            $inddeg = new IndividualsDegrees;
            $inddeg->ind_id = $individual->ind_id;
            $inddeg->degree = $deg[$counter]->degree;
            $inddeg->degree_year = $deg[$counter]->year;
            $inddeg->name_of_degree = $deg[$counter]->name;
            $inddeg->save();

        }

        //Awards
        $awa = $request->awards;
        $awa = json_decode($awa);
        for($counter = 0; $counter < count($awa); $counter++){
            
            $indawa = new IndividualsAwards;
            $indawa->ind_id = $individual->ind_id;
            $indawa->award_name = $awa[$counter]->name;
            $indawa->awarded_by = $awa[$counter]->awarded_by;
            $indawa->award_year = $awa[$counter]->award_year;
            $indawa->award_details = $awa[$counter]->details;
            $indawa->save();

        }
        //Project
        $ind_p = new IndividualsProject;
        $ind_p->ind_id = $individual->ind_id;
        $ind_p->project_title = $request->project_title;
        $ind_p->project_value = $request->project_value;

        $dev = $request->development;
        $dev = json_decode($dev);
        $new_dev = "";
        if(count($dev) != 0){
            for($counter = 0; $counter < count($dev); $counter++){
                $new_dev .= $dev[$counter] . ",";
            }
            $new_dev = substr($new_dev, 0, -1);
            $ind_p->type_of_development = $new_dev;
        }
        $ind_p->type_of_development = $new_dev;
        $ind_p->project_description = $request->project_description;

        $name_of_files = "";
        $files = $request->file('upload_file');
        if($request->hasfile('upload_file')){
            foreach($files as $file){
            $filenameWithExt = $file->getClientOriginalName();
    
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        
            $extension = $file->getClientOriginalExtension();
        
            $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
            
            $path = $file->storeAs('public/individuals/projectImages', $filenameToStore); 
            $name_of_files .= $filenameToStore . "/";
        }
        }
        

        if($request->hasFile('file')){
            $filenameWithExt = $request->file('file')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('file')->getClientOriginalExtension();

            $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
            
            $path = $request->file('file')->storeAs('public/individuals/profileImg', $filenameToStore); 
            $ind_p->profile_image = $filenameToStore;
        }

        $name_of_files = substr($name_of_files, 0, -1);
        $ind_p->profile_images = $name_of_files;
        $ind_p->save();

        
        //Type of use
        $typ = $request->types;
        $typ = json_decode($typ);
        for($counter = 0; $counter < count($typ); $counter++){

            $indty = new IndividualsUse;
            $indty->indp_id = $ind_p->indp_id;
            $indty->use_name = $typ[$counter]->name;
            $indty->use_area = $typ[$counter]->area;
            $indty->use_units = $typ[$counter]->units;
            $indty->save();

        }

        //Service Provided
        $pro = $request->provs;
        $pro = json_decode($pro);
        for($counter = 0; $counter < count($pro); $counter++){

            $indpro = new IndividualsService;
            $indpro->indp_id = $ind_p->indp_id;
            $indpro->service_name = $pro[$counter]->name;
            $indpro->from = $pro[$counter]->from;
            $indpro->until = $pro[$counter]->until;
            $indpro->save();

        }

        //Project Team
        $projt = $request->projteam;
        $projt = json_decode($projt);
        for($counter = 0; $counter < count($projt); $counter++){

            $indteam = new IndividualsTeam;
            $indteam->indp_id = $ind_p->indp_id;
            $indteam->position = $projt[$counter]->name;
            $indteam->company = $projt[$counter]->compname;
            $indteam->save();

        }


        return $individual->ind_id;

    }

    public function individualupdate(Request $request)
    {

        $service = $request->offeredservices;
        $new_service = "";
        if(count($service) != 0){
            for($counter = 0; $counter < count($service); $counter++){
                $new_service .= $service[$counter] . ",";
            }
            $new_service = substr($new_service, 0, -1);
        }

        DB::table('individuals_tbl')->where('ind_id',$request->myiid)
            ->update(
                [
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'seniority' => $request->seniority_level,
                    'services' => $new_service,
                    'email' => $request->email,
                    'department' => $request->department
                ]);
// ========================================accreditations================================================================
        $accre = $request->accredatations;
        $accre = json_decode($accre);
        for($counter = 0; $counter < count($accre); $counter++){
            if($accre[$counter]->editable == "true"){
                IndividualsAccredatation::where('accredatation_id',$accre[$counter]->myid)
                    ->update(
                        [
                            'accredatation_name' => $accre[$counter]->accredatations,
                            'accredatation_year' => $accre[$counter]->year
                        ]
                    );
            }
            else{
                $indaccre = new IndividualsAccredatation;
                $indaccre->ind_id = $request->myiid;
                $indaccre->accredatation_name = $accre[$counter]->accredatations;
                $indaccre->accredatation_year = $accre[$counter]->year;
                $indaccre->save();
            }
        }
// ========================================Degree======================================================================
        $deg = $request->degrees;
        $deg = json_decode($deg);
        for($counter = 0; $counter < count($deg); $counter++){
            if($deg[$counter]->editable == "true"){
                IndividualsDegrees::where('degree_id',$deg[$counter]->myid)
                    ->update([
                        'degree' => $deg[$counter]->degree,
                        'degree_year' => $deg[$counter]->year,
                        'name_of_degree' => $deg[$counter]->name
                    ]);
            }
            else{
                $inddeg = new IndividualsDegrees;
                $inddeg->ind_id = $request->myiid;
                $inddeg->degree = $deg[$counter]->degree;
                $inddeg->degree_year = $deg[$counter]->year;
                $inddeg->name_of_degree = $deg[$counter]->name;
                $inddeg->save();
            }
            
        }
// ========================================Awards======================================================================
        $awa = $request->awards;
        $awa = json_decode($awa);
        for($counter = 0; $counter < count($awa); $counter++){
            if($awa[$counter]->editable == "true"){
                IndividualsAwards::where('award_id',$awa[$counter]->myid)
                    ->update([
                        'award_name' => $awa[$counter]->name,
                        'awarded_by' => $awa[$counter]->awarded_by,
                        'award_year' => $awa[$counter]->award_year,
                        'award_details' => $awa[$counter]->details
                    ]);
            }
            else{
                $indawa = new IndividualsAwards;
                $indawa->ind_id = $request->myiid;
                $indawa->award_name = $awa[$counter]->name;
                $indawa->awarded_by = $awa[$counter]->awarded_by;
                $indawa->award_year = $awa[$counter]->award_year;
                $indawa->award_details = $awa[$counter]->details;
                $indawa->save();
            }
        }
        return 'updated';
    }
}

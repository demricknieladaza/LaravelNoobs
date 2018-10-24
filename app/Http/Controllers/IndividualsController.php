<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use App\Individuals;


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
}

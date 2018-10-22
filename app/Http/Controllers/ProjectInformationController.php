<?php

namespace App\Http\Controllers;

use App\ProjectInformations;
use App\TransportLink;
use App\AreaSpecificInformation;
use App\Constraints;
use App\TypeOfUse;
use App\Milestones;
use App\Meetings;
use App\UserAccountsModel;
use App\ProjectTeam;
use App\Tender;
use App\TenderQuery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;


class ProjectInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //This is the main model
        $project = new ProjectInformations;
        $project->project_title = $request->input('project_title');
        // $project->project_id = $request->input('project_id');
        $project->location = $request->input('location');
        $project->type_of_development = $request->input('type_of_development');
        $project->construction_value = $request->input('construction_value');
        $project->procurement_route = $request->input('procurement_route');
        $project->user_id = $request->session()->get('id');
        if($request->hasFile('site_plan')){
            $filenameWithExt = $request->file('site_plan')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('site_plan')->getClientOriginalExtension();

            $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
            
            $path = $request->file('site_plan')->storeAs('public/site_plan', $filenameToStore); 
            $project->site_plan = $filenameToStore;
        }
        if($request->hasFile('programme')){
            $filenameWithExt = $request->file('programme')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('programme')->getClientOriginalExtension();

            $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
            
            $path = $request->file('programme')->storeAs('public/programme', $filenameToStore); 
            $project->programme = $filenameToStore;
        }
        if($request->hasFile('policy')){
            $filenameWithExt = $request->file('policy')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('policy')->getClientOriginalExtension();

            $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
            
            $path = $request->file('policy')->storeAs('public/policy', $filenameToStore); 
            $project->policy = $filenameToStore;
        }
        $project->save();

        $id = $project->project_record_id;


        //This the sub models
        $transport = new TransportLink;
        $transport->main_road = $request->input('main_road');
        $transport->tube_station_one = $request->input('tube_station_one');
        $transport->tube_station_two = $request->input('tube_station_two');
        $transport->bus_lines = $request->input('bus_lines');
        $transport->project_record_id = $id;
        $transport->save();
        
        $area = new AreaSpecificInformation;
        $area->adjacent_uses = $request->input('adjacent_uses');
        $area->history = $request->input('history');
        $area->project_record_id = $id;
        $area->save();

        
        //Dynamic Field
        $const = $request->constraint;
        for($counter = 0; $counter < count($const); $counter++){
            $constraints = new Constraints;
            $constraints->constraint = $const[$counter];
            $constraints->project_record_id = $project->project_record_id;
            $constraints->save();

        }

        $use_name = $request->use_name;
        $use_area = $request->use_area;
        $use_units = $request->use_units;
        $use_type = $request->use_type;
        for($counter = 0; $counter < count($use_name); $counter++){
            $type = new TypeOfUse;
            $type->use_name = $use_name[$counter];
            $type->use_area = $use_area[$counter];
            $type->use_units = $use_units[$counter];
            $type->use_type = $use_type[$counter];
            $type->project_record_id = $project->project_record_id;
            $type->save();
        }
        
        $riba = $request->riba_stage;
        $date = $request->date;
        for($counter = 0; $counter < count($riba); $counter++){
            $milestones = new Milestones;
            $milestones->riba_stage = $riba[$counter];
            $milestones->date = $date[$counter];
            $milestones->project_record_id = $project->project_record_id;
            $milestones->save();
        }

        $meetings = new Meetings;
        $meetings->design_team_meeting = $request->input('design_team_meeting');
        $meetings->project_progress_meeting = $request->input('project_progress_meeting');
        $meetings->project_record_id = $id;
        $meetings->save();

        
        $position = $request->member_position;
        $name = $request->member_name;
        for($counter = 0; $counter < count($position); $counter++){
            $team = new ProjectTeam;
            $team->member_position = $position[$counter];
            $team->member_name = $name[$counter];
            $team->project_record_id = $project->project_record_id;
            $team->save();
        }

        

        //return response()->json(array('success' => true, 'insert_id' => $project->project_record_id), 200);
        // return view('publish_edit')->with('data', $data);
        return redirect('/project_info'.'/'.$id.'/edit');

    }

    public function downloadSitePlan(Request $request){
        //$check = Storage::get(filename)
        $filename = $request->get('filename');
        // $filename = "Site Plan_1538510078_.docx";
        // $file  = storage_path('site_plan'). "/" . $filename;
        // return Response::download($file);
        //return Storage::download($request->filename);
        // return Storage::('public/site_plan'. $filename);
        //$file = Storage::get();
        $path = 'public/site_plan/'. $filename;
        //return Storage::download($path, $filename);
        return response()->download('storage/site_plan/'.$filename);
        // return "PAKYU";
    }

    // public function deleteSitePlan(Request $request){
    //     $filename = $request->get('site_plan_deleted');

    //     // //Storage::delete('public/site_plan'. $filename);
    //     // // unlink(storage_path('public/site_plan'.$filename));
    //     // // $path  = asset('storage/site_plan'. $filename);

    //     // unlink(storage_path('storage/site_plan'. $filename));

    //     // return "SUCCESS!";

    //     $site = ProjectInformations::where('site_plan', $filename);
    //     $site->delete();
    //     return "success!";
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProjectInformation  $projectInformation
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectInformation $projectInformation)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjectInformation  $projectInformation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //This is the main model
        $project = ProjectInformations::find($id);

        //This the sub models
        $transport = TransportLink::where('project_record_id', $id)->first();
        
        //$area = AreaSpecificInformation::where('project_record_id', $id)->get();
        $area = AreaSpecificInformation::where('project_record_id', $id)->first();

        $constraints = Constraints::where('project_record_id', $id)->get();

        $type = TypeOfUse::where('project_record_id', $id)->get();

        $milestones = Milestones::where('project_record_id', $id)->get();

        $meetings = Meetings::where('project_record_id', $id)->first();

        $team = ProjectTeam::where('project_record_id', $id)->get();

        $tender = Tender::where('project_record_id', $id)->get();

        $questions = TenderQuery::where('project_record_id', $id)->get();

        return view('publish_view')->with([
            'project' => $project,
            'transport' => $transport,
            'area' => $area,
            'constraints' => $constraints,
            'type' => $type,
            'milestones' => $milestones,
            'meetings' => $meetings,
            'team' => $team,
            'tender' => $tender,
            'questions' => $questions
        ]);
       // return json($tender);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjectInformation  $projectInformation
     * @return \Illuminate\Http\Response
     */



    public function update(Request $request, $id)
    {
                
        //$id = $request->get('project_record_id');
        //This is the main model
        $project = ProjectInformations::find($id);
        $project->project_title = $request->input('project_title');
        // $project->project_id = $request->input('project_id');
        $project->location = $request->input('location');
        $project->type_of_development = $request->input('type_of_development');
        $project->construction_value = $request->input('construction_value');
        $project->procurement_route = $request->input('procurement_route');
        //$project->user_id = $request->session()->get('id');
        if($request->hasFile('site_plan')){
            $filenameWithExt = $request->file('site_plan')->getClientOriginalName();
        
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        
            $extension = $request->file('site_plan')->getClientOriginalExtension();
        
            $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
            
            $path = $request->file('site_plan')->storeAs('public/site_plan/', $filenameToStore); 
            $project->site_plan = $filenameToStore;
        }
        if($request->hasFile('new_site_plan')){
            
            Storage::delete('public/site_plan/'. $project->site_plan);
            $filenameWithExt = $request->file('new_site_plan')->getClientOriginalName();
        
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        
            $extension = $request->file('new_site_plan')->getClientOriginalExtension();
        
            $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
            
            $path = $request->file('new_site_plan')->storeAs('public/site_plan/', $filenameToStore); 
            $project->site_plan = $filenameToStore;
        }
        if($request->hasFile('programme')){
            $filenameWithExt = $request->file('programme')->getClientOriginalName();
        
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        
            $extension = $request->file('programme')->getClientOriginalExtension();
        
            $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
            
            $path = $request->file('programme')->storeAs('public/programme/', $filenameToStore); 
            $project->site_plan = $filenameToStore;
        }
        if($request->hasFile('new_programme')){
            
            Storage::delete('public/programme/'. $project->site_plan);
            $filenameWithExt = $request->file('new_programme')->getClientOriginalName();
        
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        
            $extension = $request->file('new_programme')->getClientOriginalExtension();
        
            $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
            
            $path = $request->file('new_programme')->storeAs('public/programme/', $filenameToStore); 
            $project->site_plan = $filenameToStore;
        }
        if($request->hasFile('policy')){
            $filenameWithExt = $request->file('policy')->getClientOriginalName();
        
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        
            $extension = $request->file('policy')->getClientOriginalExtension();
        
            $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
            
            $path = $request->file('policy')->storeAs('public/policy/', $filenameToStore); 
            $project->site_plan = $filenameToStore;
        }
        if($request->hasFile('new_policy')){
            
            Storage::delete('public/policy/'. $project->site_plan);
            $filenameWithExt = $request->file('new_policy')->getClientOriginalName();
        
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        
            $extension = $request->file('new_policy')->getClientOriginalExtension();
        
            $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
            
            $path = $request->file('new_policy')->storeAs('public/policy/', $filenameToStore); 
            $project->site_plan = $filenameToStore;
        }


        $project->save();

        //This the sub models
        $transport = TransportLink::find($id);
        $main_road = $request->input('main_road');
        $tube_station_one = $request->input('tube_station_one');
        $tube_station_two = $request->input('tube_station_two');
        $bus_lines = $request->input('bus_lines');
        $transport->update([
            'main_road' => $main_road,
            'tube_station_one' => $tube_station_one,
            'tube_station_two' => $tube_station_two
        ]);
        

        $area = AreaSpecificInformation::where('project_record_id', $id);
        $area->update([
            'adjacent_uses' => $area->adjacent_uses = $request->input('adjacent_uses'),
            'history' => $area->history = $request->input('history')
        ]);
        
        Constraints::where('project_record_id', $id)->delete();
        $const = $request->constraint;
        for($counter = 0; $counter < count($const); $counter++){
            $constraints = new Constraints;
            $constraints->constraint = $const[$counter];
            $constraints->project_record_id = $project->project_record_id;
            $constraints->save();

        }
        
        TypeOfUse::where('project_record_id', $id)->delete();
        $use_name = $request->use_name;
        $use_area = $request->use_area;
        $use_units = $request->use_units;
        $use_type = $request->use_type;
        for($counter = 0; $counter < count($use_name); $counter++){
            $type = new TypeOfUse;
            $type->use_name = $use_name[$counter];
            $type->use_area = $use_area[$counter];
            $type->use_units = $use_units[$counter];
            $type->use_type = $use_type[$counter];
            $type->project_record_id = $project->project_record_id;
            $type->save();
        }

        Milestones::where('project_record_id', $id)->delete();
        $riba = $request->riba_stage;
        $date = $request->date;
        for($counter = 0; $counter < count($riba); $counter++){
            $milestones = new Milestones;
            $milestones->riba_stage = $riba[$counter];
            $milestones->date = $date[$counter];
            $milestones->project_record_id = $project->project_record_id;
            $milestones->save();
        }


        $meetings = Meetings::where('project_record_id', $id);
        $meetings->update([
            'design_team_meeting' => $meetings->design_team_meeting = $request->input('design_team_meeting'),
            'project_progress_meeting' => $meetings->project_progress_meeting = $request->input('project_progress_meeting')
        ]);

        ProjectTeam::where('project_record_id', $id)->delete();
        $position = $request->member_position;
        $name = $request->member_name;
        for($counter = 0; $counter < count($position); $counter++){
            $team = new ProjectTeam;
            $team->member_position = $position[$counter];
            $team->member_name = $name[$counter];
            $team->project_record_id = $project->project_record_id;
            $team->save();
        }

        return redirect('/project_info'.'/'.$id.'/edit');
        //return 'asdasd';
        //return response()->json(array('success' => true, 'insert_id' => $constraints), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjectInformation  $projectInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectInformation $projectInformation)
    {
        //
    }

    public function tenderStore(Request $request, $id){

        // $id = $request->input('project_record_id');
        // return $id;
        // return redirect('/project_info'.'/'.$id.'/edit');
        return $id;
    }

    public function saveResponse(Request $request){

        $query_id = $request->id;
        $response = $request->response;

        for($counter = 0; $counter < count($query_id); $counter++){
            $quest = TenderQuery::find($query_id[$counter]);
            // $quest->response = $response[$counter];
            $quest->update([
                'response' => $quest->response = $response[$counter]
            ]);
        }

        return "SUCCESS!";

    }
}

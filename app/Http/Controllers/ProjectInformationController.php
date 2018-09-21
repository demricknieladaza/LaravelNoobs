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
use Illuminate\Http\Request;


class ProjectInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $project = new ProjectInformations;
        $project->project_title = $request->get('project_title');
        $project->project_id = $request->get('project_id');
        $project->location = $request->get('location');
        $project->type_of_development = $request->get('type_of_development');
        $project->construction_value = $request->get('construction_value');
        $project->procurement_nd_route = $request->get('procurement_nd_route');
        
        if($project->save()){
            return response()->json(array('success' => true, 'insert_id' => $project->id), 200);
        }*/

        // Multiple Model saves to minimize columns in a single table
        
        //This is the main model
        $project = new ProjectInformations;
        $project->project_title = $request->input('project_title');
        $project->project_id = $request->input('project_id');
        $project->location = $request->input('location');
        $project->type_of_development = $request->input('type_of_development');
        $project->construction_value = $request->input('construction_value');
        $project->procurement_route = $request->input('procurement_route');
        $project->user_id = $request->session()->get('id');
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

        $constraints = new Constraints;
        $constraints->constraint_one = $request->input('constraint_one');
        $constraints->constraint_two = $request->input('constraint_two');
        $constraints->constraint_three = $request->input('constraint_three');
        $constraints->project_record_id = $id;
        $constraints->save();

        
        $type = new TypeOfUse;

        $type->use_area_one = $request->input('use_area_one');
        $type->use_units_one = $request->input('use_units_one');
        $type->use_type_one = $request->input('use_type_one');

        $type->use_area_two = $request->input('use_area_two');
        $type->use_units_two = $request->input('use_units_two');
        $type->use_type_two = $request->input('use_type_two');

        $type->use_area_three = $request->input('use_area_three');
        $type->use_units_three = $request->input('use_units_three');
        $type->use_type_three = $request->input('use_type_three');

        $type->use_area_four = $request->input('use_area_four');
        $type->use_units_four = $request->input('use_units_four');
        $type->use_type_four = $request->input('use_type_four');
        $type->project_record_id = $id;

        $type->save();
        
        
        $milestones = new Milestones;
        $milestones->riba_stage_one = $request->input('riba_stage_one');
        $milestones->riba_stage_two = $request->input('riba_stage_two');
        $milestones->riba_stage_three = $request->input('riba_stage_three');
        $milestones->riba_stage_four = $request->input('riba_stage_four');
        $milestones->project_record_id = $id;
        $milestones->save();

        $meetings = new Meetings;
        $meetings->design_team_meeting = $request->input('design_team_meeting');
        $meetings->project_progress_meeting = $request->input('project_progress_meeting');
        $meetings->project_record_id = $id;
        $meetings->save();

        $team = new ProjectTeam;
        $team->position = $request->input('position');
        $team->name = $request->input('name');
        $team->project_record_id = $id;
        $team->save();
        

        //return response()->json(array('success' => true, 'insert_id' => $project->project_record_id), 200);
        // return view('publish_edit')->with('data', $data);
        return redirect('/project_info'.'/'.$id.'/edit');

        /*$project = ProjectInformations::create([
            'project_title' => $request->input('project_title'),
            'project_id' => $request->input('project_id')
        ]);

        $transport = new TransportLink([
            'main_road' => $request->input('main_road'),
            'tube_station_one' => $request->input('tube_station_one')
        ]);

        $project->$transport()->save($transport);*/



        // return redirect('/publish/project_dashboard');

    }

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
        $transport = TransportLink::find($id);
        
        //$area = AreaSpecificInformation::where('project_record_id', $id)->get();
        $area = AreaSpecificInformation::where('project_record_id', $id)->first();

        $constraints = Constraints::where('project_record_id', $id)->first();

        $type = TypeOfUse::find($id);

        $milestones = Milestones::where('project_record_id', $id)->first();

        $meetings = Meetings::where('project_record_id', $id)->first();

        $team = ProjectTeam::where('project_record_id', $id)->first();

        return view('publish_view')->with([
            'project' => $project,
            'transport' => $transport,
            'area' => $area,
            'constraints' => $constraints,
            'type' => $type,
            'milestones' => $milestones,
            'meetings' => $meetings,
            'team' => $team
        ]);

        return view('publish_view');
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
                //This is the main model
                $project = ProjectInformations::find($id);
                $project->project_title = $request->input('project_title');
                $project->project_id = $request->input('project_id');
                $project->location = $request->input('location');
                $project->type_of_development = $request->input('type_of_development');
                $project->construction_value = $request->input('construction_value');
                $project->procurement_route = $request->input('procurement_route');
                //$project->user_id = $request->session()->get('id');
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
                    'tube_station_two' => $tube_station_two,
                ]);
                

                $area = AreaSpecificInformation::where('project_record_id', $id);
                $area->update([
                    'adjacent_uses' => $area->adjacent_uses = $request->input('adjacent_uses'),
                    'history' => $area->history = $request->input('history')
                ]);
        
                $constraints = Constraints::where('project_record_id', $id);
                $constraints->update([
                    'constraint_one' => $constraints->constraint_one = $request->input('constraint_one'),
                    'constraint_two' => $constraints->constraint_two = $request->input('constraint_two'),
                    'constraint_three' => $constraints->constraint_three = $request->input('constraint_three')    
                ]);
        
                
                $type = TypeOfUse::where('project_record_id', $id);
                $type->update([
                            
                    'use_area_one' => $type->use_area_one = $request->input('use_area_one'),
                    'use_units_one' => $type->use_units_one = $request->input('use_units_one'),
                    'use_type_one' => $type->use_type_one = $request->input('use_type_one'),
            
                    'use_area_two' => $type->use_area_two = $request->input('use_area_two'),
                    'use_units_two' => $type->use_units_two = $request->input('use_units_two'),
                    'use_type_two' => $type->use_type_two = $request->input('use_type_two'),
            
                    'use_area_three' => $type->use_area_three = $request->input('use_area_three'),
                    'use_units_three' => $type->use_units_three = $request->input('use_units_three'),
                    'use_type_three' => $type->use_type_three = $request->input('use_type_three'),
            
                    'use_area_four' => $type->use_area_four = $request->input('use_area_four'),
                    'use_units_four' => $type->use_units_four = $request->input('use_units_four'),
                    'use_type_four' => $type->use_type_four = $request->input('use_type_four'),
                            
                ]);
                
                
                $milestones = Milestones::where('project_record_id', $id);
                $milestones->update([
                    'riba_stage_one' => $milestones->riba_stage_one = $request->input('riba_stage_one'),
                    'riba_stage_two' => $milestones->riba_stage_two = $request->input('riba_stage_two'),
                    'riba_stage_three' => $milestones->riba_stage_three = $request->input('riba_stage_three'),
                    'riba_stage_four' => $milestones->riba_stage_four = $request->input('riba_stage_four')
                ]);
        
                $meetings = Meetings::where('project_record_id', $id);
                $meetings->update([
                    'design_team_meeting' => $meetings->design_team_meeting = $request->input('design_team_meeting'),
                    'project_progress_meeting' => $meetings->project_progress_meeting = $request->input('project_progress_meeting')
                ]);
        
                $team = ProjectTeam::where('project_record_id', $id);
                $team->update([
                    'position' => $team->position = $request->input('position'),
                    'name' => $team->name = $request->input('name')
                ]);

                return redirect('/project_info'.'/'.$id.'/edit');
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
}

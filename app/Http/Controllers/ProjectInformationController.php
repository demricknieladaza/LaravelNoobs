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
        $project->type_of_development = $request->input('type_of_development');
        $project->construction_value = $request->input('construction_value');
        $project->procurement_route = $request->input('procurement_route');
        $project->user_id = $request->session()->get('id');
        $project->save();


        //This the sub models
        $transport = new TransportLink;
        $transport->main_road = $request->input('main_road');
        $transport->tube_station_one = $request->input('tube_station_one');
        $transport->tube_station_two = $request->input('tube_station_two');
        $transport->bus_lines = $request->input('bus_lines');
        $transport->project_record_id = $project->project_record_id;
        $transport->save();
        
        $area = new AreaSpecificInformation;
        $area->adjacent_uses = $request->input('adjacent_users');
        $area->history = $request->input('history');
        $area->project_record_id = $project->project_record_id;
        $area->save();

        $constraints = new Constraints;
        $constraints->constraint_one = $request->input('constraint_one');
        $constraints->constraint_two = $request->input('constraint_two');
        $constraints->constraint_three = $request->input('constraint_three');
        $constraints->project_record_id = $project->project_record_id;

        //Dynamic Field
        $use_name = $request->input('use_name');
        $use_area = $request->input('use_area');
        $use_units = $request->input('use_units');
        $use_type = $request->input('use_type');

        for($counter = 0; $counter < count($use_name); $counter++){
           
            $type = new TypeOfUse;
            $type->use_name = $use_name[$counter];
            $type->use_area = $use_area[$counter];
            $type->use_units = $use_units[$counter];
            $type->use_type = $use_type[$counter];
            $type->project_record_id = $project->project_record_id;
            $type->save();

        }
        
        $milestones = new Milestones;
        $milestones->riba_stage_one = $request->input('riba_stage_one');
        $milestones->riba_stage_two = $request->input('riba_stage_two');
        $milestones->riba_stage_three = $request->input('riba_stage_three');
        $milestones->riba_stage_four = $request->input('riba_stage_four');
        $milestones->project_record_id = $project->project_record_id;
        $milestones->save();

        $meetings = new Meetings;
        $meetings->design_team_meeting = $request->input('design_team_meeting');
        $meetings->project_progress_meeting = $request->input('project_progress_meeting');
        $meetings->project_record_id = $project->project_record_id;
        $meetings->save();

        $team = new ProjectTeam;
        $team->position = $request->input('position');
        $team->name = $request->input('name');
        $team->project_record_id = $project->project_record_id;
        $team->save();
        

        //return response()->json(array('success' => true, 'insert_id' => $project->project_record_id), 200);
        return redirect('publish_edit');

        /*$project = ProjectInformations::create([
            'project_title' => $request->input('project_title'),
            'project_id' => $request->input('project_id')
        ]);

        $transport = new TransportLink([
            'main_road' => $request->input('main_road'),
            'tube_station_one' => $request->input('tube_station_one')
        ]);

        $project->$transport()->save($transport);*/



        return redirect('/publish/project_dashboard');

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
    public function edit(ProjectInformation $projectInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjectInformation  $projectInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectInformation $projectInformation)
    {
        //
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

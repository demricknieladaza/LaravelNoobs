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
        //$project->project_id = $request->input('project_id');
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
        
        
        /*$milestones = new Milestones;
        $milestones->riba_stage_one = $request->input('riba_stage_one');
        $milestones->riba_stage_two = $request->input('riba_stage_two');
        $milestones->riba_stage_three = $request->input('riba_stage_three');
        $milestones->riba_stage_four = $request->input('riba_stage_four');
        $milestones->project_record_id = $id;
        $milestones->save();*/

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
        $transport = TransportLink::where('project_record_id', $id)->first();
        
        //$area = AreaSpecificInformation::where('project_record_id', $id)->get();
        $area = AreaSpecificInformation::where('project_record_id', $id)->first();

        $constraints = Constraints::where('project_record_id', $id)->get();

        $type = TypeOfUse::where('project_record_id', $id)->get();

        $milestones = Milestones::where('project_record_id', $id)->get();

        $meetings = Meetings::where('project_record_id', $id)->first();

        $team = ProjectTeam::where('project_record_id', $id)->get();

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
                
                $const = $request->constraint;
                $constraints = Constraints::where('project_record_id', $id);
                for($counter = 0 ; $counter < count($const); $counter++){
                    $constraints->update([
                        'constraint' => $constraints->constraint = $const[$counter],  
                    ]);
                }

        
                $use_name = $request->use_name;
                $use_area = $request->use_area;
                $use_units = $request->use_units;
                $use_type = $request->use_type;
                $type = TypeOfUse::where('project_record_id', $id);
                for($counter = 0 ; $counter < count($use_area); $counter++){
                    $type->update([
                        'use_name' => $type->use_name = $use_name[$counter],
                        'use_area' => $type->use_area = $use_area[$counter],
                        'use_units' => $type->use_units = $use_units[$counter],
                        'use_type' => $type->use_type = $use_type[$counter]                                
                    ]);
                }

                
                $riba = $request->riba_stage;
                $date = $request->date;
                $milestones = Milestones::where('project_record_id', $id);
                for($counter = 0; $counter < count($riba); $counter++){
                    $milestones->update([
                        'riba_stage' => $milestones->riba_stage = $riba[$counter],
                        'date' => $milestones->date = $request->$date[$counter]
                    ]);
                }

                $position = $request->member_position;
                $name = $request->member_name;
                $team = ProjectTeam::where('project_record_id', $id);
                for($counter = 0; $counter < count($position); $counter++){
                    $team->update([
                        'member_position' => $team->member_position = $position[$counter],
                        'member_name' => $team->member_name = $name[$counter]
                    ]);
                }


                //return redirect('/project_info'.'/'.$id.'/edit');
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
}

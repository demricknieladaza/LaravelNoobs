<?php

namespace App\Http\Controllers;

use App\ProjectInformation;
use Illuminate\Http\Request;

class Project_Info_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$user = $id;
       // return view('publish_edit');
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project_Info  $project_Info
     * @return \Illuminate\Http\Response
     */
    public function show(Project_Info $project_Info, $id)
    {
        /*$project = $id;
        $projectInfo = ProjectInformations::where('project_record_id', $project_id)->get();
        $transportInfo = TransportLink::where('project_record_id', $project)->get();
        $areaInfo = AreaSpecificInformation::where('project_record_id', $project)->get();
        $constraintsInfo = Constraints::where('project_record_id', $project)->get();
        $useInfo = TypeOfUse::where('project_record_id', $project)->get();
        $milestonesInfo = Milestones::where('project_record_id', $project)->get();
        $meetingsInfo = Meetings::where('project_record_id', $project)->get();
        $projectTeamInfo = ProjectTeam::where('project_record_id', $project)->get();

        return view('publish_edit')->with([

                'project' => $projectInfo,
                'transport' => $transportInfo,
                'area' => $areaInfo,
                'constraints' => $constraintsInfo,
                'use' => $useInfo,
                'milestones' => $milestonesInfo,
                'meetings' => $meetingsInfo,
                'team' => $projectTeamInfo

        ]);
        return view('publish_edit')->with($id);*/

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project_Info  $project_Info
     * @return \Illuminate\Http\Response
     */
    public function edit(Project_Info $project_Info)
    {
        return view('publish_edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project_Info  $project_Info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project_Info $project_Info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project_Info  $project_Info
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project_Info $project_Info)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\ProjectInformations;
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
        $project = new ProjectInformations;
        $project->project_title = $request->get('project_title');
        $project->project_id = $request->get('project_id');
        $project->location = $request->get('location');
        $project->type_of_development = $request->get('type_of_development');
        $project->construction_value = $request->get('construction_value');
        $project->procurement_nd_route = $request->get('procurement_nd_route');
        
        if($project->save()){
            return response()->json(array('success' => true, 'insert_id' => $project->id), 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProjectInformation  $projectInformation
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectInformation $projectInformation)
    {
        //
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

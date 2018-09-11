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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new ProjectInformation;
        $project->project_title = $request->get('project_title');
        $project->project_id = $request->get('project_id');
        $project->location = $request->get('location');
        $project->type_of_development = $request->get('type_of_development');
        $project->construction_value = $request->get('construction_value');
        $project->procurement_nd_route = $request->get('procurement_nd_route');
        
        if($project->save()){
            return Response::json(array('success' => true, 'insert_id' => $project->id), 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project_Info  $project_Info
     * @return \Illuminate\Http\Response
     */
    public function show(Project_Info $project_Info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project_Info  $project_Info
     * @return \Illuminate\Http\Response
     */
    public function edit(Project_Info $project_Info)
    {
        //
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

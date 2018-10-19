<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tender;
use App\ProjectInformations;
use App\SubmittedTenders;
use App\DraftedTenders;

class BidController extends Controller
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
        //
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

    public function getCredentials($id){
        $tender_id = $id;
        $tender = Tender::where('tender_id', $tender_id)->first();

        $project = ProjectInformations::where('project_record_id', $tender->project_record_id)->first();

        return view('bid')->with([
            'tender' => $tender,
            'project' =>$project
        ]);

    }

    public function submitBid(Request $request){
        
        $sub = new SubmittedTenders;
        $sub->user_id = $request->session()->get('id');
        $sub->project_record_id = $request->get('project_id');
        $sub->tender_id = $request->get('tender_id');
        $sub->save();

        $tender = Tender::find($request->get('tender_id'));
        $tender->bids_received = $tender->bids_received + 1;
        $tender->update();

        return 'SUCCESS!';
    }

    public function saveBid(Request $request){
        // $tender = $id;
        
        $draft = new DraftedTenders;
        $draft->user_id = $request->session()->get('id');
        $draft->project_record_id = $request->input('project_record_id');
        $draft->tender_id = $request->input('tender_id');
        $draft->save();

        $tender = Tender::where('tender_id', $request->input('tender_id'))->first();

        $project = ProjectInformations::where('project_record_id', $request->input('project_record_id'))->first();

        return view('bid')->with([
            'tender' => $tender,
            'project' =>$project
        ]);

        // return 'SUCCESS!!';
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tender;

class TenderDisplayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        //return $tenders[0]['project_record_id'];
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
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proj = $id;
        $tenders = Tender::where('project_record_id', $proj)->orderBy('created_at', 'desc')->get();
        // if(count($tenders) == 0){
        //     return view('tender_no_display')->with('proj', $proj);
        // }
        // else{
        $bids = Db::table('bid_records_tbl as b')->where('project_record_id', $proj)
        ->rightJoin('company_tbl as c', 'b.user_id', '=', 'c.u_id')
        ->orderBy('b.created_at', 'desc')
        ->get();
        return view('tender_display')->with(['tenders'=> $tenders, 'proj'=> $proj, 'bids' => $bids]);
        // return $bids->comp_name;
        // }
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

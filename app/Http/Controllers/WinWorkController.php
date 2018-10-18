<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use App\ProjectInformations;
use App\Tender;
use App\TypeOfUse;
use App\TransportLink;
use App\AreaSpecificInformation;
use App\Constraints;
use App\Milestones;
use App\Meetings;
use App\UserAccountsModel;
use App\ProjectTeam;
use App\SavedTenders;

class WinWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        // $sub = DB::table('type_of_use_tbl')
        //             ->leftJoin('project_information_tbl as pj', 'type_of_use_tbl.project_record_id', '=', 'pj.project_record_id')
        //             ->get()
        //             ->groupBy('project_record_id');

        $work = DB::table('project_information_tbl')
                ->rightJoin('tender_tbl as td', 'project_information_tbl.project_record_id', '=', 'td.project_record_id')
                ->where('status', '=', 'Active')
                // ->joinSub($sub, 'sub', function ($join) {
                //     $join->on('project_information_tbl.project_record_id', '=', 'sub.project_record_id');
                // })
                // ->rightJoin('type_of_use_tbl as ty', 'td.project_record_id', '=', 'ty.project_record_id')
                // ->where('td.project_record_id', '=', 'ty.project_record_id')
                // ->rightJoin('tender_tbl', function($join){
                //     $join->on('tender_tbl.project_record_id', '=', 'ty.project_record_id')
                //     ->where('tender_tbl.status', '=', 'Active');
                // })
                // ->rightJoin('tender_tbl as ten', 'type_of_use_tbl.project_record_id', '=', 'ten.project_record_id')
                // ->where('status', '=', 'Active')
                // ->where('services', '=', 'Fire Engineer', 'Sustainability Consultant')
                // ->whereIn('services',['Fire Engineer', '', '' , '' ])
                // ->rightJoin('winwork_data_tbl as wd', 'project_information_tbl.project_record_id', '=', 'wd.project_record_id')
                // ->whereBetween('project_information_tbl.construction_value', array(10000, 30000))
                ->orderBy('project_information_tbl.created_at', 'desc')
                ->get();
                // ->paginate(5);
                // ->unique('project_record_id');
        $type = array();
        foreach($work as $wo){
            $use = TypeOfUse::where('project_record_id', $wo->project_record_id)->get();
            array_push($type, $use->use_name);
        }

        $user = $request->session()->get('id');
        $liked = SavedTenders::where('user_id', $user)->get();
        $saved = array();
        foreach($liked as $wo){
            array_push($saved,$wo->tender_id);
        }
        
        // $new = json_encode($type);
        return $type; 
        // return count($type);         
        // return $work;
        // return $sub;
        // return view('winwork')->with([
        //     'project' => $work,
        //     'type'    => $type,
        //     'saved'   => $saved
        // ]);

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

    public function moveToSavedOps(Request $request){

        $id = $request->get('idd');
        $tender = $request->get('tenid');

        $sv = new SavedTenders;
        $sv->user_id = $request->session()->get('id');
        $sv->project_record_id = $id;
        $sv->tender_id = $tender;
        $sv->save();

        return ('SAVED');

    }

    public function searchFilters(Request $request){
        $filters = $request->service_filter;

        $work = DB::table('project_information_tbl')
                    ->rightJoin('tender_tbl as td', 'project_information_tbl.project_record_id', '=', 'td.project_record_id')
                    ->where('status', '=', 'Active')
                    // ->rightJoin('type_of_use_tbl as ty', 'td.project_record_id', '=', 'ty.project_record_id')
                    // ->where('td.project_record_id', '=', 'ty.project_record_id')
                    // ->rightJoin('tender_tbl', function($join){
                    //     $join->on('tender_tbl.project_record_id', '=', 'ty.project_record_id')
                    //     ->where('tender_tbl.status', '=', 'Active');
                    // })
                    // ->rightJoin('tender_tbl as ten', 'type_of_use_tbl.project_record_id', '=', 'ten.project_record_id')
                    // ->where('status', '=', 'Active')
                    ->whereIn('services',$filters)
                    
                    // ->whereIn('services',['Fire Engineer', '', '' , '' ])
                    // ->rightJoin('winwork_data_tbl as wd', 'project_information_tbl.project_record_id', '=', 'wd.project_record_id')
                    //->groupBy('project_information_tbl.project_record_id', 'distinct')
                    ->orderBy('project_information_tbl.created_at', 'desc')
                    // ->get();
                    ->paginate(5);

        return view('winwork')->with('project', $work);
            // return $filters;

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
        $tenders = Tender::where('project_record_id', $id)
                         ->where('status', 'Active')
                         ->get();
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
        return view('pds')->with([
            'tenders'=> $tenders,
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

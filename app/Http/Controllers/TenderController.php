<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
use App\TenderAppointment;
use App\TenderBonds;
use App\TenderQaStatements;
use App\TenderQualityAssurance;


class TenderController extends Controller
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
        $id = $request->get('id');
        $tender = new Tender;
        $tender->project_record_id = $id;
        $tender->services = $request->get('services');
        $tender->save();


        $bonds = $request->get('cntbonds');
        for($counter = 0; $counter < count($bonds); $counter++){
            $bonds = new TenderBonds;
            $bonds->tender_id = $tender->tender_id;
            $bonds->bond_name = $bonds[$counter];
            $bonds->save();
        }

        $appointment = new TenderAppointment;
        $appointment->insurance_name = $request->insurance_name;
        $appointment->insurance_level = $request->insurance_level;
        $appointment->bonds_id = $tender->tender_id;
        $appointment->collateral_warranties = $request->input('colaterla_warranties');
        $appointment->limit_of_liability = $request->input('limit_of_liability');
        $appointment->save();


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

        return redirect('/project_info'.'/'.$id.'/edit')->with([
            'project' => $project,
            'transport' => $transport,
            'area' => $area,
            'constraints' => $constraints,
            'type' => $type,
            'milestones' => $milestones,
            'meetings' => $meetings,
            'team' => $team
        ]);


        //return redirect('/project_info'.'/'.$id.'/edit');
        //return response()->json(array('success' => true, 'services' => $services), 200);
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
}

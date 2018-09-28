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
        $idd = $request->input('idd');
        $check = Tender::where('tender_id', $idd)->first();
        $newtend = [];
        if($check){
            // Tender::where('tender_id', $idd)->delete();
            // $tender = new Tender;
            // $tender->project_record_id = $id;
            // $tender->services = $request->get('services');
            // $tender->save();

            $tender = Tender::where('tender_id', $idd);
            $tender->update([
                'project_record_id' => $tender->project_record_id = $id,
                'services' => $tender->services = $request->get('services')
            ]);
        }
        if(!$check){
            $tender = new Tender;
            $tender->project_record_id = $id;
            $tender->services = $request->get('services');
            $tender->save();
            $newtend = $tender;
        }

        

        $bonds = $request->bonds;
        for($counter = 0; $counter < count($bonds); $counter++){
            $bonds = new TenderBonds;
            $bonds->tender_id = $tender->tender_id;
            $bonds->bond_name = $bonds[$counter];
            $bonds->save();
        }

        $insurance_n = $request->insurance_name;
        $insurance_l = $request->insurance_level;
        for($counter = 0; $counter < count($insurance_n); $counter++){
            $appointment = new TenderAppointment;
            $appointment->insurance_name = $insurance_n[$counter];
            $appointment->insurance_level = $insurance_l[$counter];
            $appointment->tender_id = $tender->tender_id;
            $appointment->collateral_warranties = $request->input('collateral_warranties');
            $appointment->limit_of_liability = $request->input('limit_of_liability');
            $appointment->save();
        }



        // $tender = Tender::where('project_record_id', $id)->get();

        $tenderid = $newtend;
        // $tenderid = ['a','b'];


        // return redirect('/project_info'.'/'.$id.'/edit');//->with($tenderid);
        return response()->json(array('success' => true, 'services' => $tenderid), 200);
        //$data = Tender::where('project_record_id', $id)->get();
        //return response()->json($data);
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

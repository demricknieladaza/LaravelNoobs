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
use App\TenderEvaluation;


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
            Tender::where('tender_id', $idd)->delete();
            $tender = new Tender;
            $tender->project_record_id = $id;
            $tender->services = $request->get('services');
            $tender->save();

            // $tender = Tender::where('tender_id', $idd);
            // $tender->update([
            //     'project_record_id' => $tender->project_record_id = $id,
            //     'services' => $tender->services = $request->get('services')
            // ]);
        }
        if(!$check){
            $tender = new Tender;
            $tender->project_record_id = $id;
            $tender->services = $request->get('services');
            $tender->save();
            $newtend = $tender;
        }

        // $tender = Tender::where('project_record_id', $id)->get();

        $tenderid = $newtend;
        // $tenderid = ['a','b'];


        // return redirect('/project_info'.'/'.$id.'/edit');//->with($tenderid);
        return response()->json(array('success' => true, 'services' => $tenderid), 200);
        //$data = Tender::where('project_record_id', $id)->get();
        //return response()->json($data);
    }

    public function appointmentStore(Request $request){

        $idd = $request->get('current_tend');

        $bond = $request->bonds;
        for($counter = 0; $counter < count($bond); $counter++){
            $bonds = new TenderBonds;
            $bonds->tender_id = $idd;
            $bonds->bond_name = $bond[$counter];
            $bonds->save();
        }

        $name = $request->insurance_name;
        $level = $request->insurance_level;
        for($counter = 0; $counter < count($name); $counter++){
            $appointment = new TenderAppointment;
            $appointment->insurance_name = $name[$counter];
            $appointment->insurance_level = $level[$counter];
            $appointment->tender_id = $idd;
            $appointment->collateral_warranties = $request->get('collateral_warranties');
            $appointment->limit_of_liability = $request->get('limit_of_liability');
            $appointment->save();
        }

        return response()->json(array('success' => true, 'test' => $idd), 200);
    }

    public function tenderEvalStore(Request $request){

        $idd = $request->get('current_tend');
        $eval = new TenderEvaluation;
        $eval->tender_id = $idd;
        $eval->qualitative = $request->get('qualitative');
        $eval->quantitative = $request->get('quantitative');
        $eval->risk = $request->get('risk');
        $eval->orginasation = $request->get('orginasation');
        $eval->organisation_project_exp = $request->get('organisation_project_exp');
        $eval->organisation_variety_of_services = $request->get('organisation_variety_of_services');
        $eval->organisation_awards = $request->get('organisation_awards');
        $eval->organisation_accreditations = $request->get('organisation_accreditations');
        $eval->orgranisation_relationship = $request->get('orgranisation_relationship');
        $eval->individual = $request->get('individual');
        $eval->individual_project_exp = $request->get('individual_project_exp');
        $eval->individual_years_exp = $request->get('individual_industry_exp');
        $eval->individual_awards = $request->get('individual_awards');
        $eval->individual_accrediations = $request->get('individual_accrediations');
        $eval->individual_relationship = $request->get('individual_relationship');
        $eval->individual_communication_skills = $request->get('individual_communication_skills');
        $eval->individual_people_management = $request->get('individual_people_management');
        $eval->individual_time_management = $request->get('individual_time_management');
        $eval->individual_pro_active = $request->get('individual_pro_active');
        $eval->individual_social_behavior = $request->get('individual_social_behavior');
        $eval->individual_hard_skills = $request->get('individual_hard_skills');
        $eval->insurances = $request->get('insurances');
        $eval->bonds = $request->get('bonds');
        $eval->third_parties = $request->get('third_parties');
        $eval->limit_of_liability = $request->get('limit_of_liability');
        $eval->net_contribution_clause = $request->get('net_contribution_clause');
        $eval->save();

        return response()->json($eval);


    }

    public function gettend(Request $request)
    {
        $tenid = $request->get('tendid');
        $tender = Tender::where('tender_id', $tenid)->first();
        $bonds = TenderBonds::where('tender_id', $tenid)->get();
        $appointment = TenderAppointment::where('tender_id', $tenid)->get();
        $eval = TenderEvaluation::where('tender_id', $tenid)->get();


        return response()->json(array(
            'tender' => $tender,
            'bonds' => $bonds,
            'appointment' => $appointment,
            'eval' => $eval
        ));
    

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

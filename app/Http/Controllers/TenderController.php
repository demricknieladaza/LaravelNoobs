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
use App\TenderScopeDeliverables;
use App\TenderDeliverablesRaci;
use App\TenderDeliverablesNum;
use App\TenderScopeMeetings;
use App\TenderMeetingsChoice;
use App\TenderMeetingsNum;
use App\TenderDesignConsiderations;
use App\TenderScopeAdvise;
use App\WinWorkData;
use App\AddedDeliverables;
use App\AddedMeetings;
use App\AddedDesign;
use App\AddedAdvise;
use App\TenderPreQualificationQuestionnaire;


class TenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('create_tender');
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

    public function gamitonbi($idd, $deliverables, $meeting, $design, $advise){
        if($deliverables){
            foreach ($deliverables as $del) {
                if($del['edit'] == 'no'){
                    $added = new AddedDeliverables;
                    $added->tender_id = $idd;
                    $added->name = $del['name'];
                    $added->details = $del['details'];
                    $added->raci = $del['raci'];
                    $added->num = $del['number'];
                    $added->save();
                }
            }
        }

        if($meeting){
            foreach ($meeting as $del) {
                if($del['edit'] == 'no'){
                    $added = new AddedMeetings;
                    $added->tender_id = $idd;
                    $added->name = $del['name'];
                    $added->purpose = $del['purpose'];
                    $added->attendees = $del['attendees'];
                    $added->duration = $del['duration'];
                    $added->reoccurence = $del['reoccurence'];
                    $added->arrange = $del['arrange'];  
                    $added->num = $del['number'];
                    $added->save();
                }
            }
        }

        if($design){
            foreach ($design as $del) {
                if($del['edit'] == 'no'){
                    $added = new AddedDesign;
                    $added->tender_id = $idd;
                    $added->name = $del['name'];
                    $added->question = $del['question'];
                    $added->save();
                }
            }
        }

        if($advise){
            foreach ($advise as $del) {
                if($del['edit'] == 'no'){
                    $added = new AddedAdvise;
                    $added->tender_id = $idd;
                    $added->name = $del['name'];
                    $added->num = $del['number'];
                    $added->save();
                }
            }
        }
        
    }

    public function tenderScopeStore(Request $request){
        $strategic = 'Strategic Brief';
        $programme = 'Project Programme';
        $feasibility = 'Feasibility Study';
        $design = 'Design Responsibility Matrix';
        $site = 'Site Information Report';
        $information = 'Information Exchange Strategy';
        $project = 'Project Brief';
        $risk = 'Risk Assessment';
        $handover = 'Handover Strategy';
        $execution = 'Project Execution Plan';
        $proposal = 'Design Proposals';

        $this->gamitonbi($request->get('idd'), $request->get('addeddeliv'), $request->get('addedmeet'),  $request->get('addeddes'), $request->get('addedad'));


        $deliverables = new TenderScopeDeliverables;
        $deliverables->tender_id = $request->get('idd');
        $deliverables->strategic_brief = $request->get('strategic_details');
        $deliverables->project_programme = $request->get('pprogramme_details');
        $deliverables->feasibility_study = $request->get('feasibility_details');
        $deliverables->design_responsibility = $request->get('design_details');
        $deliverables->site_information = $request->get('site_details');
        $deliverables->information_exchange_strategy = $request->get('info_details');
        $deliverables->project_brief = $request->get('project_details');
        $deliverables->risk_assessment = $request->get('risk_details');
        $deliverables->handover_strategy = $request->get('hand_details');
        $deliverables->project_execution_plan = $request->get('execution_details');
        $deliverables->design_proposal = $request->get('design_details');
        $deliverables->save();

        //Strategic Brief
        $strat_raci_storage = $request->strategic_raci;
        $strat_num_storage = $request->strategic_num;
        $strat_raci = "";
        $strat_num = "";
        for($counter = 0; $counter < count($strat_raci_storage); $counter++){
            $strat_raci .= $strat_raci_storage[$counter] .",";
        }
        $strat_raci = substr($strat_raci, 0, -1);
        $strategic_raci = new TenderDeliverablesRaci;
        $strategic_raci->deliverables_id = $deliverables->deliverables_id;
        $strategic_raci->row_name = $strategic;
        $strategic_raci->raci = $strat_raci;
        $strategic_raci->save();

        for($counter = 0; $counter < count($strat_num_storage); $counter++){
            $strat_num .= $strat_num_storage[$counter] . ",";
        }
        $strat_num = substr($strat_num, 0 , -1);
        $strategic_num = new TenderDeliverablesNum;
        $strategic_num->deliverables_id = $deliverables->deliverables_id;
        $strategic_num->row_name = $strategic;
        $strategic_num->num = $strat_num;
        $strategic_num->save();

        //Project Programme
        $programme_raci_storage = $request->pprogramme_raci;
        $programme_num_storage = $request->pprogramme_num;
        $prog_raci = "";
        $prog_num = "";
        for($counter = 0; $counter < count($programme_raci_storage); $counter++){
            $prog_raci .= $programme_raci_storage[$counter] . ",";
        }
        $prog_raci = substr($prog_raci, 0, -1);
        $pprogramme_raci = new TenderDeliverablesRaci;
        $pprogramme_raci->deliverables_id = $deliverables->deliverables_id;
        $pprogramme_raci->row_name = $programme;
        $pprogramme_raci->raci = $prog_raci;
        $pprogramme_raci->save();

        for($counter = 0; $counter < count($programme_num_storage); $counter++){
            $prog_num .= $programme_num_storage[$counter] . ",";
        }
        $prog_num = substr($prog_num, 0, -1);
        $pprogramme_num = new TenderDeliverablesNum;
        $pprogramme_num->deliverables_id = $deliverables->deliverables_id;
        $pprogramme_num->row_name = $programme;
        $pprogramme_num->num = $prog_num;
        $pprogramme_num->save();

        //Feasibility Study
        $feasibility_raci_storage = $request->feasibility_raci;
        $feasibility_raci = "";
        for($counter = 0; $counter < count($feasibility_raci_storage); $counter++){
            $feasibility_raci .= $feasibility_raci_storage[$counter] . ",";
        }
        $feasibility_raci = substr($feasibility_raci, 0, -1);
        $feas_raci = new TenderDeliverablesRaci;
        $feas_raci->deliverables_id = $deliverables->deliverables_id;
        $feas_raci->row_name = $feasibility;
        $feas_raci->raci = $feasibility_raci;
        $feas_raci->save();

        $feasibility_num_storage = $request->feasibility_num;
        $feasibility_num = "";
        for($counter = 0; $counter < count($feasibility_num_storage); $counter++){
            $feasibility_num .= $feasibility_num_storage[$counter] . ",";
        }
        $feasibility_num = substr($feasibility_num, 0, -1);        $feas_num = new TenderDeliverablesNum;
        $feas_num->deliverables_id = $deliverables->deliverables_id;
        $feas_num->row_name = $feasibility;
        $feas_num->num = $feasibility_num;
        $feas_num->save();

        //Design Responsibility
        $design_raci_storage = $request->design_raci;
        $des_raci = "";
        for($counter = 0; $counter < count($design_raci_storage); $counter++){
            $des_raci .= $design_raci_storage[$counter] . ",";
        }
        $des_raci = substr($des_raci, 0, -1);
        $design_raci = new TenderDeliverablesRaci;
        $design_raci->deliverables_id = $deliverables->deliverables_id;
        $design_raci->row_name = $design;
        $design_raci->raci = $des_raci;
        $design_raci->save();

        $design_num_storage = $request->design_num;
        $des_num = "";
        for($counter = 0; $counter < count($design_num_storage); $counter++){
            $des_num .= $design_num_storage[$counter] . ",";
        }
        $des_num = substr($des_num, 0, -1);
        $design_num = new TenderDeliverablesNum;
        $design_num->deliverables_id = $deliverables->deliverables_id;
        $design_num->row_name = $design;
        $design_num->num = $des_num;
        $design_num->save();

        //Site Information
        $site_raci_storage = $request->site_raci;
        $s_raci = "";
        for($counter = 0; $counter < count($site_raci_storage); $counter++){
            $s_raci .= $site_raci_storage[$counter] . ",";
        }
        $s_raci = substr($s_raci, 0, -1);
        $site_raci = new TenderDeliverablesRaci;
        $site_raci->deliverables_id = $deliverables->deliverables_id;
        $site_raci->row_name = $site;
        $site_raci->raci = $s_raci;
        $site_raci->save();
        $site_num_storage = $request->site_num;

        $s_num = "";
        for($counter = 0; $counter < count($site_num_storage); $counter++){
            $s_num .= $site_num_storage[$counter] . ",";
        }
        $s_num = substr($s_num, 0, -1);
        $site_num = new TenderDeliverablesNum;
        $site_num->deliverables_id = $deliverables->deliverables_id;
        $site_num->row_name = $site;
        $site_num->num = $s_num;
        $site_num->save();

        //Information Exchange
        $info_raci_storage = $request->info_raci;
        $inf_raci = "";
        for($counter = 0; $counter < count($info_raci_storage); $counter++){
            $inf_raci .= $info_raci_storage[$counter] . ",";
        }
        $inf_raci = substr($inf_raci, 0, -1);
        $info_raci = new TenderDeliverablesRaci;
        $info_raci->deliverables_id = $deliverables->deliverables_id;
        $info_raci->row_name = $information;
        $info_raci->raci = $inf_raci;
        $info_raci->save();

        $info_num_storage = $request->info_num;
        $inf_num = "";
        for($counter = 0; $counter < count($info_num_storage); $counter++){
            $inf_num .= $info_num_storage[$counter] . ",";
        }
        $inf_num = substr($inf_num, 0, -1);
        $info_num = new TenderDeliverablesNum;
        $info_num->deliverables_id = $deliverables->deliverables_id;
        $info_num->row_name = $information;
        $info_num->num = $inf_num;
        $info_num->save();

        //Project Brief
        $project_raci_storage = $request->project_raci;
        $project_raci = "";
        for($counter = 0; $counter < count($project_raci_storage); $counter++){
            $project_raci .= $project_raci_storage[$counter] . ",";
        }
        $project_raci = substr($project_raci, 0, -1);
        $proj_raci = new TenderDeliverablesRaci;
        $proj_raci->deliverables_id = $deliverables->deliverables_id;
        $proj_raci->row_name = $project;
        $proj_raci->raci = $project_raci;
        $proj_raci->save();

        $project_num_storage = $request->project_num;
        $project_num = "";
        for($counter = 0; $counter < count($project_num_storage); $counter++){
            $project_num .= $project_num_storage[$counter] . ",";
        }
        $project_num = substr($project_num, 0, -1);
        $proj_num = new TenderDeliverablesNum;
        $proj_num->deliverables_id = $deliverables->deliverables_id;
        $proj_num->row_name = $project;
        $proj_num->num = $project_num;
        $proj_num->save();

        //Risk Assessment
        $risk_raci_storage = $request->risk_raci;
        $r_raci = "";
        for($counter = 0; $counter < count($risk_raci_storage); $counter++){
            $r_raci .= $risk_raci_storage[$counter] . ",";
        }
        $r_raci = substr($r_raci, 0, -1);
        $risk_raci = new TenderDeliverablesRaci;
        $risk_raci->deliverables_id = $deliverables->deliverables_id;
        $risk_raci->row_name = $risk;
        $risk_raci->raci = $r_raci;
        $risk_raci->save();

        $risk_num_storage = $request->risk_num;
        $r_num = "";
        for($counter = 0; $counter < count($risk_raci_storage); $counter++){
            $r_num .= $risk_num_storage[$counter] . ",";
        }
        $r_num = substr($r_num, 0, -1);
        $risk_num = new TenderDeliverablesNum;
        $risk_num->deliverables_id = $deliverables->deliverables_id;
        $risk_num->row_name = $risk;
        $risk_num->num = $r_num;
        $risk_num->save();

        //Handover
        $hand_raci_storage = $request->handover_raci;
        $h_raci = "";
        for($counter = 0; $counter < count($hand_raci_storage); $counter++){
            $h_raci .= $hand_raci_storage[$counter] . ",";
        }
        $h_raci = substr($h_raci, 0, -1);
        $hand_raci = new TenderDeliverablesRaci;
        $hand_raci->deliverables_id = $deliverables->deliverables_id;
        $hand_raci->row_name = $handover;
        $hand_raci->raci = $h_raci;
        $hand_raci->save();

        $hand_num_storage = $request->handover_num;
        $h_num = "";
        for($counter = 0; $counter < count($hand_num_storage); $counter++){
            $h_num .= $hand_num_storage[$counter] . ",";
        }
        $h_num = substr($h_num, 0, -1);
        $hand_num = new TenderDeliverablesNum;
        $hand_num->deliverables_id = $deliverables->deliverables_id;
        $hand_num->row_name = $handover;
        $hand_num->num = $h_num;
        $hand_num->save();

        //Project Execution Plan
        $exec_raci_storage = $request->execution_raci;
        $e_raci = "";
        for($counter = 0; $counter < count($exec_raci_storage); $counter++){
            $e_raci .= $exec_raci_storage[$counter] . ",";
        }
        $e_raci = substr($e_raci, 0, -1);
        $exec_raci = new TenderDeliverablesRaci;
        $exec_raci->deliverables_id = $deliverables->deliverables_id;
        $exec_raci->row_name = $execution;
        $exec_raci->raci = $e_raci;
        $exec_raci->save();

        $exec_num_storage = $request->execution_num;
        $e_num = "";
        for($counter = 0; $counter < count($exec_num_storage); $counter++){
            $e_num .= $exec_num_storage[$counter] . ",";
        }
        $e_num = substr($e_num, 0, -1);
        $exec_num = new TenderDeliverablesNum;
        $exec_num->deliverables_id = $deliverables->deliverables_id;
        $exec_num->row_name = $execution;
        $exec_num->num = $e_num;
        $exec_num->save();

        //Design Proposal
        $prop_raci_storage = $request->proposal_raci;
        $pro_raci = "";
        for($counter = 0; $counter < count($prop_raci_storage); $counter++){
            $pro_raci .= $prop_raci_storage[$counter] . ",";
        }
        $pro_raci = substr($pro_raci, 0, -1);
        $prop_raci = new TenderDeliverablesRaci;
        $prop_raci->deliverables_id = $deliverables->deliverables_id;
        $prop_raci->row_name = $proposal;
        $prop_raci->raci = $pro_raci;
        $prop_raci->save();

        $prop_num_storage = $request->proposal_num;
        $pro_num = "";
        for($counter = 0; $counter < count($prop_num_storage); $counter++){
            $pro_num .= $prop_num_storage[$counter] . ",";
        }
        $pro_num = substr($pro_num, 0, -1);
        $prop_num = new TenderDeliverablesNum;
        $prop_num->deliverables_id = $deliverables->deliverables_id;
        $prop_num->row_name = $proposal;
        $prop_num->num = $pro_num;
        $prop_num->save();

        //Scope Meetings
        $pre = 'Pre-Application Meetings';
        $sv = 'Site Visits';
        $riba = 'Riba stage';
        $ins = 'Inspection';


        $meeting = new TenderScopeMeetings;
        $meeting->tender_id = $request->get('idd');
        $meeting->pre_app_purpose = $request->get('pre_app_purpose');
        $meeting->pre_app_attendees = $request->get('pre_app_attendees');
        $meeting->pre_app_assumed_duration = $request->get('pre_app_assumed');
        $meeting->pre_app_reoccurence = $request->get('pre_app_reoccurence');
        $meeting->site_visits_purpose = $request->get('site_visists_purpose');
        $meeting->site_visits_attendees = $request->get('site_visits_attendees');
        $meeting->site_visits_assumed_duration = $request->get('site_visits_assumed');
        $meeting->site_visits_reoccurence = $request->get('site_visits_reoccurence');
        $meeting->riba_purpose = $request->get('riba_purpose');
        $meeting->riba_attendees = $request->get('riba_attendees');
        $meeting->riba_assumed_duration = $request->get('riba_assumed');
        $meeting->riba_reoccurence = $request->get('riba_reoccurence');
        $meeting->inspection_purpose = $request->get('inspection_purpose');
        $meeting->inspection_attendees = $request->get('inspection_attendees');
        $meeting->inspection_assumed_duration = $request->get('inspection_assumed');
        $meeting->inspection_reoccurence = $request->get('inspection_reoccurence');
        $meeting->save();

        //Pre-Application Meetings
        $pre_choice = $request->pre_app_choice;
        $p_choice = "";
        for($counter = 0; $counter < count($pre_choice); $counter++){
            $p_choice .= $pre_choice[$counter] . ",";
        }
        $p_choice = substr($p_choice, 0 , -1);
        $choice = new TenderMeetingsChoice;
        $choice->meeting_id = $meeting->meeting_id;
        $choice->row_name = $pre;
        $choice->choice = $p_choice;
        $choice->save();

        $pre_num = $request->pre_app_num;
        $p_num = "";
        for($counter = 0; $counter < count($pre_num); $counter++){
            $p_num .= $pre_num[$counter] . ",";
        }
        $p_num = substr($p_num, 0, -1);
        $num = new TenderMeetingsNum;
        $num->meeting_id = $meeting->meeting_id;
        $num->row_name = $pre;
        $num->num = $p_num;
        $num->save();

        //Site Visits
        $sv_choice = $request->site_visits_choice;
        $s_choice = "";
        for($counter = 0; $counter < count($sv_choice); $counter++){
            $s_choice .= $sv_choice[$counter] . ",";
        }
        $s_choice = substr($s_choice, 0, -1);
        $svc = new TenderMeetingsChoice;
        $svc->meeting_id = $meeting->meeting_id;
        $svc->row_name = $sv;
        $svc->choice = $s_choice;
        $svc->save();

        $sv_num = $request->site_visits_num;
        $s_num = "";
        for($counter = 0; $counter < count($sv_num); $counter++){
            $s_num .= $sv_num[$counter] . ",";
        }
        $s_num = substr($s_num, 0, -1);
        $svn = new TenderMeetingsNum;
        $svn->meeting_id = $meeting->meeting_id;
        $svn->row_name = $sv;
        $svn->num = $s_num;
        $svn->save();

        //Riba Stage
        $r_choice = $request->riba_choice;
        $riba_c = "";
        for($counter = 0; $counter < count($r_choice); $counter++){
            $riba_c = $r_choice[$counter] . ",";
        }
        $riba_c = substr($riba_c, 0, -1);
        $rc = new TenderMeetingsChoice;
        $rc->meeting_id = $meeting->meeting_id;
        $rc->row_name = $riba;
        $rc->choice = $riba_c;
        $rc->save();

        $r_num = $request->riba_num;
        $riba_n = "";
        for($counter = 0; $counter < count($r_num); $counter++){
            $riba_n .= $r_num[$counter] . ",";
        }
        $riba_n = substr($riba_n, 0, -1);
        $rn = new TenderMeetingsNum;
        $rn->meeting_id = $meeting->meeting_id;
        $rn->row_name = $riba;
        $rn->num = $riba_n;
        $rn->save();

        //Inspection
        $ins_choice = $request->inspection_choice;
        $ins_c = "";
        for($counter = 0; $counter < count($ins_choice); $counter++){
            $ins_c .= $ins_choice[$counter] . ",";
        }
        $ins_c = substr($ins_c, 0, -1);
        $ic = new TenderMeetingsChoice;
        $ic->meeting_id = $meeting->meeting_id;
        $ic->row_name = $ins;
        $ic->choice = $ins_c;
        $ic->save();

        $ins_num = $request->inspection_num;
        $ins_n = "";
        for($counter = 0; $counter < count($ins_num); $counter++){
            $ins_n .= $ins_num[$counter] . ",";
        }
        $ins_n = substr($ins_n, 0, -1);
        $in = new TenderMeetingsNum;
        $in->meeting_id = $meeting->meeting_id;
        $in->row_name = $ins;
        $in->num = $ins_n;
        $in->save();

        //Design Considerations
        $question = new TenderDesignConsiderations;
        $question->tender_id = $request->get('idd');
        $question->question_one_applies_to = $request->get('question_one');
        $question->question_two_applies_to = $request->get('question_two');
        $question->question_three_applies_to = $request->get('question_three');
        $question->question_four_applies_to = $request->get('question_four');
        $question->question_five_applies_to = $request->get('question_five');
        $question->save();

        //Advise On
        $ad = new TenderScopeAdvise;
        $one = $request->advise_one;
        $two = $request->advise_two;
        $three= $request->advise_three;
        $four = $request->advise_four;
        $five = $request->advise_five;
        $six = $request->advise_six;
        $a_one = "";
        $a_two = "";
        $a_three = "";
        $a_four = "";
        $a_five = "";
        $a_six = "";

        for($counter = 0; $counter < count($one); $counter++){
            $a_one .= $one[$counter] . ",";
        }
        for($counter = 0; $counter < count($two); $counter++){
            $a_two .= $two[$counter] . ",";
        }
        for($counter = 0; $counter < count($three); $counter++){
            $a_three .= $three[$counter] . ",";
        }
        for($counter = 0; $counter < count($four); $counter++){
            $a_four .= $four[$counter] . ",";
        }
        for($counter = 0; $counter < count($five); $counter++){
            $a_five .= $five[$counter] . ",";
        }
        for($counter = 0; $counter < count($six); $counter++){
            $a_six .= $six[$counter] . ",";
        }
        $a_one = substr($a_one, 0, -1);
        $a_two = substr($a_two, 0, -1);
        $a_three = substr($a_three, 0, -1);
        $a_four = substr($a_four, 0, -1);
        $a_five = substr($a_five, 0, -1);
        $a_six = substr($a_six, 0, -1);
        $ad->tender_id = $request->get('idd');
        $ad->advise_one = $a_one;
        $ad->advise_two = $a_two;
        $ad->advise_three = $a_three;
        $ad->advise_four = $a_four;
        $ad->advise_five = $a_five;
        $ad->advise_six = $a_six;
        $ad->save();


        $added_row_name = $request->added_row_name;
        $added_details = $request->added_details;
        $added_raci = $request->added_raci;
        $added_num = $request->added_num;
        $add_raci = "";
        $add_num = "";
        for($counter = 0; $counter < count($added_raci); $counter++){
            $add_raci .= $added_raci[$counter] . ",";
        }
        $add_raci = substr($add_raci, 0, -1);
        for($counter = 0; $counter < count($added_num); $counter++){
            $add_num .= $added_num[$counter] . ",";
        }
        $add_num = substr($add_num, 0, -1);

        // for($counter = 0; $counter < count($added_row_name); $counter++){
        //     $added = new AddedDeliverables;
        //     $added->tender_id = $request->get('idd');
        //     $added->row_name = $added_row_name;
        //     $added->details = $added_details;
        //     $added->raci = $add_raci;
        //     $added->num = $add_num;
        //     $added->save();
        // }

        return('SUCCESS!');

    }

    public function questionnaireSave(Request $request){
        
        $data = $request->questions;
        $ques = new TenderPreQualificationQuestionnaire;
        $ques->tender_id = $request->get('idd');
        $ques->question = $data;
        $ques->save();

        // $ques = new TenderPreQualificationQuestionnaire;
        // $ques->tender_id = 180;
        // $ques->question = 'WILKINS';
        // $ques->save();

        return 'SAVED!!!';
    }

    public function tenderQualityStore(Request $request){

        $qual = new TenderQualityAssurance;
        $qual->tender_id = $request->get('idd');
        $qual->created_by_fname = $request->get('created_fname');
        $qual->created_by_lname = $request->get('created_lname');
        $qual->checked_by_fname = $request->get('checked_fname');
        $qual->checked_by_lname = $request->get('checked_lname');
        $qual->approved_by_fname = $request->get('approved_fname');
        $qual->approved_by_lname = $request->get('approved_lname');
        $qual->save();

        return "SUCCESS!";
    }

    public function updateTenderProcess(Request $request){
        
        $tender = Tender::where('tender_id', $request->get('idd'))
                    ->update([
                        "status" => $request->get('status'),
                        "end" => $request->get('end'),
                        "time_remaining" => $request->get('time_remaining')
                    ]);
        
        // $tender->status = $request->get('status');
        // $tender->end = $request->get('end');
        // $tender->time_remaining = $request->get('selected_days');
        // $tender->update([
        //     "end" => $tender->end = $request->get('end'),
        //     "time_remaining" => $tender->time_remaining = $request->get('time_remaining')
        // ]);  

        return "UPDATED!!!";
    }

    public function gettend($id)
    {
        $tenid = $id;
        $tender = Tender::where('tender_id', $tenid)->first();
        $bonds = TenderBonds::where('tender_id', $tenid)->get();
        $appointment = TenderAppointment::where('tender_id', $tenid)->get();
        $eval = TenderEvaluation::where('tender_id', $tenid)->get();

        // return response()->json(array(
        //     'tender' => $tender,
        //     'bonds' => $bonds,
        //     'appointment' => $appointment,
        //     'eval' => $eval
        // ));
        return view('create_tender')->with([
            'tender' => $tender,
            'bonds' => $bonds,
            'appointment' => $appointment,
            'eval' => $eval
        ]);
    

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
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
use App\CompInfo;


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

    public function editTend(Request $request)
    {
        Tender::where('tender_id',$request->get('idd'))
        ->update([
            'services' => $request->get('services')
        ]);
        return "success";
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
            $deliv = new TenderScopeDeliverables;
            $deliv->tender_id = $tender->tender_id;
            $deliv->save();

            $meet = new TenderScopeMeetings;
            $meet->tender_id = $tender->tender_id;
            $meet->save();

            $des = new TenderDesignConsiderations;
            $des->tender_id = $tender->tender_id;
            $des->save();

            $add = new TenderScopeAdvise;
            $add->tender_id = $tender->tender_id;
            $add->save();
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
        
        $idd = $request->get('tender_id');
        
        $appointment = new TenderAppointment;
        $appointment->tender_id = $idd;

        $insurance_name = $request->insurance_name;
        $new_ins_name = "";
        if(count($insurance_name) != 0){
            for($counter = 0; $counter < count($insurance_name); $counter++){
                $new_ins_name .= $insurance_name[$counter] . ",";
            }
            $new_ins_name = substr($new_ins_name, 0, -1);
            $appointment->insurance_name = $new_ins_name;
        }
        $appointment->insurance_name = $new_ins_name;

        $insurance_level = $request->insurance_level;
        $new_ins_lvl = "";
        if(count($insurance_level)){
            for($counter = 0; $counter < count($insurance_level); $counter++){
                $new_ins_lvl .= $insurance_level[$counter] . ",";
            }
            $new_ins_lvl = substr($new_ins_lvl, 0, -1);
            $appointment->insurance_level = $new_ins_lvl;
        }
        $appointment->insurance_level = $new_ins_lvl;

        $bond = $request->bonds;
        $new_bonds = "";
        if(count($bond) != 0){
            for($counter = 0; $counter < count($bond); $counter++){
                $new_bonds .= $bond[$counter] . ",";
            }
            $new_bonds = substr($new_bonds, 0, -1);
            $appointment->bonds = $new_bonds;
        }
        $appointment->bonds = $new_bonds;

        $appointment->collateral_warranties = $request->get('collateral_warranties');
        $appointment->limit_of_liability = $request->get('limit_of_liability');

        if($request->hasFile('form_of_appointment')){

            $filenameWithExt = $request->file('form_of_appointment')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('form_of_appointment')->getClientOriginalExtension();

            $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
            
            $path = $request->file('form_of_appointment')->storeAs('public/formOfAppointment', $filenameToStore); 
            $appointment->form_of_appointment = $filenameToStore;
        }

        $name_of_files = "";

        if($request->hasFile('signature_files')){
            $files = $request->file('signature_files');
            foreach($files as $file){
                $filenameWithExt = $file->getClientOriginalName();
        
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            
                $extension = $file->getClientOriginalExtension();
            
                $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
                
                $path = $file->storeAs('public/signatureFiles', $filenameToStore); 
                $name_of_files .= $filenameToStore . "/";
            }
        }
        $name_of_files = substr($name_of_files, 0, -1);
        $appointment->documents_for_signature = $name_of_files;

        $appointment->save();

        //return response()->json(array('success' => true, 'test' => $idd), 200);
        // return "SUCCESS!";
        return $this->gettend($idd);

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
                else{
                    AddedDeliverables::where('added_id', $del['add_id'])
                    ->update(
                        [
                            'name' => $del['name'],
                            'details' => $del['details'],
                            'raci' => $del['raci'],
                            'num' => $del['number']
                        ]
                    );
                    echo 'updated';
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
                else{
                    AddedMeetings::where('added_id', $del['add_id'])
                    ->update(
                        [
                            'name' => $del['name'],
                            'purpose' => $del['purpose'],
                            'attendees' => $del['attendees'],
                            'duration' => $del['duration'],
                            'reoccurence' => $del['reoccurence'],
                            'arrange' => $del['arrange'],  
                            'num' => $del['number']
                        ]
                    );
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
                else{
                    AddedDesign::where('added_id', $del['add_id'])
                    ->update(
                        [
                            'name' => $del['name'],
                            'question' => $del['question']
                        ]
                    );
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
                else{
                    AddedAdvise::where('added_id', $del['add_id'])
                    ->update(
                        [
                            'name' => $del['name'],
                            'num' => $del['number']
                        ]
                    );
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

        TenderScopeDeliverables::where('deliverables_id', $request->get('delivid'))->delete();
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

        //Strategic Brief
        $strat_raci_storage = $request->strategic_raci;
        $strat_num_storage = $request->strategic_num;
        $strat_raci = "";
        $strat_num = "";
        if(count($strat_raci_storage) != 0){
            for($counter = 0; $counter < count($strat_raci_storage); $counter++){
                $strat_raci .= $strat_raci_storage[$counter] .",";
            }
            $strat_raci = substr($strat_raci, 0, -1);
            $deliverables->strategic_raci = $strat_raci;
        }
        $deliverables->strategic_raci = $strat_raci;

        if(count($strat_num_storage) != 0){
            for($counter = 0; $counter < count($strat_num_storage); $counter++){
                $strat_num .= $strat_num_storage[$counter] . ",";
            }
            $strat_num = substr($strat_num, 0 , -1);
            $deliverables->strategic_num = $strat_num;
        }
        $deliverables->strategic_num = $strat_num;

        //Project Programme
        $programme_raci_storage = $request->pprogramme_raci;
        $programme_num_storage = $request->pprogramme_num;
        $prog_raci = "";
        $prog_num = "";
        if(count($programme_raci_storage) != 0){
            for($counter = 0; $counter < count($programme_raci_storage); $counter++){
                $prog_raci .= $programme_raci_storage[$counter] . ",";
            }
            $prog_raci = substr($prog_raci, 0, -1);
            $deliverables->pprogramme_raci = $prog_raci;
        }
        $deliverables->pprogramme_raci = $prog_raci;

        if(count($programme_num_storage) != 0){
            for($counter = 0; $counter < count($programme_num_storage); $counter++){
                $prog_num .= $programme_num_storage[$counter] . ",";
            }
            $prog_num = substr($prog_num, 0, -1);
            $deliverables->pprogramme_num = $prog_num;
        }
        $deliverables->pprogramme_num = $prog_num;

        //Feasibility Study
        $feasibility_raci_storage = $request->feasibility_raci;
        $feasibility_raci = "";
        if(count($feasibility_raci_storage) != 0){
            for($counter = 0; $counter < count($feasibility_raci_storage); $counter++){
                $feasibility_raci .= $feasibility_raci_storage[$counter] . ",";
            }
            $feasibility_raci = substr($feasibility_raci, 0, -1);
            $deliverables->feasibility_raci = $feasibility_raci;
        }
        $deliverables->feasibility_raci = $feasibility_raci;

        $feasibility_num_storage = $request->feasibility_num;
        $feasibility_num = "";
        if(count($feasibility_num_storage) != 0){
            for($counter = 0; $counter < count($feasibility_num_storage); $counter++){
                $feasibility_num .= $feasibility_num_storage[$counter] . ",";
            }
            $feasibility_num = substr($feasibility_num, 0, -1);
            $deliverables->feasibility_num = $feasibility_num;
        }
        $deliverables->feasibility_num = $feasibility_num;

        //Design Responsibility
        $design_raci_storage = $request->design_raci;
        $des_raci = "";
        if(count($design_raci_storage) != 0){
            for($counter = 0; $counter < count($design_raci_storage); $counter++){
                $des_raci .= $design_raci_storage[$counter] . ",";
            }
            $des_raci = substr($des_raci, 0, -1);
            $deliverables->design_raci = $des_raci;
        }
        $deliverables->design_raci = $des_raci;

        $design_num_storage = $request->design_num;
        $des_num = "";
        if(count($design_num_storage) != 0){
            for($counter = 0; $counter < count($design_num_storage); $counter++){
                $des_num .= $design_num_storage[$counter] . ",";
            }
            $des_num = substr($des_num, 0, -1);
            $deliverables->design_num= $des_num;
        }
        $deliverables->design_num= $des_num;

        //Site Information
        $site_raci_storage = $request->site_raci;
        $s_raci = "";
        if(count($site_raci_storage) != 0){
            for($counter = 0; $counter < count($site_raci_storage); $counter++){
                $s_raci .= $site_raci_storage[$counter] . ",";
            }
            $s_raci = substr($s_raci, 0, -1);
            $deliverables->site_raci = $s_raci;
        }
        $deliverables->site_raci = $s_raci;

        $site_num_storage = $request->site_num;
        $s_num = "";
        if(count($site_num_storage) != 0){
            for($counter = 0; $counter < count($site_num_storage); $counter++){
                $s_num .= $site_num_storage[$counter] . ",";
            }
            $s_num = substr($s_num, 0, -1);
            $deliverables->site_num = $s_num;
        }
        $deliverables->site_num = $s_num;

        //Information Exchange
        $info_raci_storage = $request->info_raci;
        $inf_raci = "";
        if(count($info_raci_storage) != 0){
            for($counter = 0; $counter < count($info_raci_storage); $counter++){
                $inf_raci .= $info_raci_storage[$counter] . ",";
            }
            $inf_raci = substr($inf_raci, 0, -1);
            $deliverables->information_raci = $inf_raci;
        }
        $deliverables->information_raci = $inf_raci;

        $info_num_storage = $request->info_num;
        $inf_num = "";
        if(count($info_num_storage) != 0){
            for($counter = 0; $counter < count($info_num_storage); $counter++){
                $inf_num .= $info_num_storage[$counter] . ",";
            }
            $inf_num = substr($inf_num, 0, -1);
            $deliverables->information_num = $inf_num;
        }
        $deliverables->information_num = $inf_num;

        //Project Brief
        $project_raci_storage = $request->project_raci;
        $project_raci = "";
        if(count($project_raci_storage) != 0){
            for($counter = 0; $counter < count($project_raci_storage); $counter++){
                $project_raci .= $project_raci_storage[$counter] . ",";
            }
            $project_raci = substr($project_raci, 0, -1);
            $deliverables->project_raci = $project_raci;
        }
        $deliverables->project_raci = $project_raci;

        $project_num_storage = $request->project_num;
        $project_num = "";
        if(count($project_num_storage) != 0){
            for($counter = 0; $counter < count($project_num_storage); $counter++){
                $project_num .= $project_num_storage[$counter] . ",";
            }
            $project_num = substr($project_num, 0, -1);
            $deliverables->project_num = $project_num;
    
        }
        $deliverables->project_num = $project_num;


        //Risk Assessment
        $risk_raci_storage = $request->risk_raci;
        $r_raci = "";
        if(count($risk_raci_storage) != 0){
            for($counter = 0; $counter < count($risk_raci_storage); $counter++){
                $r_raci .= $risk_raci_storage[$counter] . ",";
            }
            $r_raci = substr($r_raci, 0, -1);
            $deliverables->risk_raci = $r_raci;
        }
        $deliverables->risk_raci = $r_raci;

        $risk_num_storage = $request->risk_num;
        $r_num = "";
        if(count($risk_num_storage) != 0){
            for($counter = 0; $counter < count($risk_raci_storage); $counter++){
                $r_num .= $risk_num_storage[$counter] . ",";
            }
            $r_num = substr($r_num, 0, -1);
            $deliverables->risk_num = $r_num;
        }
        $deliverables->risk_num = $r_num;

        //Handover
        $hand_raci_storage = $request->handover_raci;
        $h_raci = "";
        if(count($hand_raci_storage) != 0){
            for($counter = 0; $counter < count($hand_raci_storage); $counter++){
                $h_raci .= $hand_raci_storage[$counter] . ",";
            }
            $h_raci = substr($h_raci, 0, -1);
            $deliverables->handover_raci = $h_raci;
        }
        $deliverables->handover_raci = $h_raci;

        $hand_num_storage = $request->handover_num;
        $h_num = "";
        if(count($hand_num_storage) != 0){
            for($counter = 0; $counter < count($hand_num_storage); $counter++){
                $h_num .= $hand_num_storage[$counter] . ",";
            }
            $h_num = substr($h_num, 0, -1);
            $deliverables->handover_num = $h_num;
        }
        $deliverables->handover_num = $h_num;

        //Project Execution Plan
        $exec_raci_storage = $request->execution_raci;
        $e_raci = "";
        if(count($exec_raci_storage) != 0){
            for($counter = 0; $counter < count($exec_raci_storage); $counter++){
                $e_raci .= $exec_raci_storage[$counter] . ",";
            }
            $e_raci = substr($e_raci, 0, -1);
            $deliverables->execution_raci = $e_raci;
        }
        $deliverables->execution_raci = $e_raci;

        $exec_num_storage = $request->execution_num;
        $e_num = "";
        if(count($exec_num_storage) != 0){
            for($counter = 0; $counter < count($exec_num_storage); $counter++){
                $e_num .= $exec_num_storage[$counter] . ",";
            }
            $e_num = substr($e_num, 0, -1);
            $deliverables->execution_num= $e_num;
        }
        $deliverables->execution_num= $e_num;

        //Design Proposal
        $prop_raci_storage = $request->proposal_raci;
        $pro_raci = "";
        if(count($prop_raci_storage) != 0){
            for($counter = 0; $counter < count($prop_raci_storage); $counter++){
                $pro_raci .= $prop_raci_storage[$counter] . ",";
            }
            $pro_raci = substr($pro_raci, 0, -1);
            $deliverables->proposal_raci = $pro_raci;
        }
        $deliverables->proposal_raci = $pro_raci;

        $prop_num_storage = $request->proposal_num;
        $pro_num = "";
        if(count($prop_num_storage) != 0){
            for($counter = 0; $counter < count($prop_num_storage); $counter++){
                $pro_num .= $prop_num_storage[$counter] . ",";
            }
            $pro_num = substr($pro_num, 0, -1);
            $deliverables->proposal_num = $pro_num;
        }
        $deliverables->proposal_num = $pro_num;
        $deliverables->save();

        //Scope Meetings
        TenderScopeMeetings::where('meeting_id', $request->get('meetid'))->delete();
        $meeting = new TenderScopeMeetings;
        $meeting->tender_id = $request->get('idd');
        $meeting->pre_app_purpose = $request->get('pre_app_purpose');
        $meeting->pre_app_attendees = $request->get('pre_app_attendees');
        $meeting->pre_app_assumed_duration = $request->get('pre_app_assumed');
        $meeting->pre_app_reoccurence = $request->get('pre_app_reoccurence');
        $meeting->site_visits_purpose = $request->get('site_visits_purpose');
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
        // $meeting->save();

        //Pre-Application Meetings
        $pre_choice = $request->pre_app_choice;
        $p_choice = "";
        if(count($pre_choice) != 0){
            for($counter = 0; $counter < count($pre_choice); $counter++){
                $p_choice .= $pre_choice[$counter] . ",";
            }
            $p_choice = substr($p_choice, 0 , -1);
            $meeting->pre_app_choice = $p_choice;
        }
        $meeting->pre_app_choice = $p_choice;

        $pre_num = $request->pre_app_num;
        $p_num = "";
        if(count($pre_num) != 0){
            for($counter = 0; $counter < count($pre_num); $counter++){
                $p_num .= $pre_num[$counter] . ",";
            }
            $p_num = substr($p_num, 0, -1);
            $meeting->pre_app_num = $p_num;
        }
        $meeting->pre_app_num = $p_num;

        //Site Visits
        $sv_choice = $request->site_visits_choice;
        $s_choice = "";
        if(count($sv_choice) != 0){
            for($counter = 0; $counter < count($sv_choice); $counter++){
                $s_choice .= $sv_choice[$counter] . ",";
            }
            $s_choice = substr($s_choice, 0, -1);
            $meeting->site_visits_choice = $s_choice;
        }
        $meeting->site_visits_choice = $s_choice;

        $sv_num = $request->site_visits_num;
        $s_num = "";
        if(count($sv_num) != 0){
            for($counter = 0; $counter < count($sv_num); $counter++){
                $s_num .= $sv_num[$counter] . ",";
            }
            $s_num = substr($s_num, 0, -1);
            $meeting->site_visits_num = $s_num;
        }
        $meeting->site_visits_num = $s_num;

        //Riba Stage
        $r_choice = $request->riba_choice;
        $riba_c = "";
        if(count($r_choice) != 0){
            for($counter = 0; $counter < count($r_choice); $counter++){
                $riba_c .= $r_choice[$counter] . ",";
            }
            $riba_c = substr($riba_c, 0, -1);
            $meeting->riba_choice = $riba_c;
        }
        $meeting->riba_choice = $riba_c;

        $r_num = $request->riba_num;
        $riba_n = "";
        if(count($r_num) != 0){
            for($counter = 0; $counter < count($r_num); $counter++){
                $riba_n .= $r_num[$counter] . ",";
            }
            $riba_n = substr($riba_n, 0, -1);
            $meeting->riba_num = $riba_n;
        }
        $meeting->riba_num = $riba_n;


        //Inspection
        $ins_choice = $request->inspection_choice;
        $ins_c = "";
        if(count($ins_choice) != 0){
            for($counter = 0; $counter < count($ins_choice); $counter++){
                $ins_c .= $ins_choice[$counter] . ",";
            }
            $ins_c = substr($ins_c, 0, -1);
            $meeting->site_inspection_choice = $ins_c;
        }
        $meeting->site_inspection_choice = $ins_c;

        $ins_num = $request->inspection_num;
        $ins_n = "";
        if(count($ins_num) != 0){
            for($counter = 0; $counter < count($ins_num); $counter++){
                $ins_n .= $ins_num[$counter] . ",";
            }
            $ins_n = substr($ins_n, 0, -1);
            $meeting->site_inspection_num = $ins_n;
        }

        $meeting->save();

        //Design Considerations
        TenderDesignConsiderations::where('design_id', $request->get('desid'))->delete();
        $question = new TenderDesignConsiderations;
        $question->tender_id = $request->get('idd');
        $question->question_one_applies_to = $request->get('question_one');
        $question->question_two_applies_to = $request->get('question_two');
        $question->question_three_applies_to = $request->get('question_three');
        $question->question_four_applies_to = $request->get('question_four');
        $question->question_five_applies_to = $request->get('question_five');
        $question->save();

        //Advise On
        TenderScopeAdvise::where('advise_id', $request->get('adid'))->delete();  
        $ad = new TenderScopeAdvise;
        $ad->tender_id = $request->get('idd');
        
        $one = $request->advise_one;
        $a_one = "";
        if(count($a_one) != 0){
            for($counter = 0; $counter < count($one); $counter++){
                $a_one .= $one[$counter] . ",";
            }
            $a_one = substr($a_one, 0, -1);
            $ad->advise_one = $a_one;

        }
        $ad->advise_one = $a_one;

        $two = $request->advise_two;
        $a_two = "";
        if(count($two) != 0){
            for($counter = 0; $counter < count($two); $counter++){
                $a_two .= $two[$counter] . ",";
            }
            $a_two = substr($a_two, 0, -1);
            $ad->advise_two = $a_two;
        }
        $ad->advise_two = $a_two;

        $three= $request->advise_three;
        $a_three = "";
        if(count($three) != 0){
            for($counter = 0; $counter < count($three); $counter++){
                $a_three .= $three[$counter] . ",";
            }
            $a_three = substr($a_three, 0, -1);
            $ad->advise_three = $a_three;

        }
        $ad->advise_three = $a_three;

        $four = $request->advise_four;
        $a_four = "";
        if(count($four) != 0){
            for($counter = 0; $counter < count($four); $counter++){
                $a_four .= $four[$counter] . ",";
            }
            $a_four = substr($a_four, 0, -1);
            $ad->advise_four = $a_four;

        }
        $ad->advise_four = $a_four;

        $five = $request->advise_five;
        $a_five = "";
        if(count($five) != 0){
            for($counter = 0; $counter < count($five); $counter++){
                $a_five .= $five[$counter] . ",";
            }
            $a_five = substr($a_five, 0, -1);
            $ad->advise_five = $a_five;
        }
        $ad->advise_five = $a_five;

        $six = $request->advise_six;
        $a_six = "";
        if(count($six) != 0){
            for($counter = 0; $counter < count($six); $counter++){
                $a_six .= $six[$counter] . ",";
            }
            $a_six = substr($a_six, 0, -1);
            $ad->advise_six = $a_six;
        }
        $ad->advise_six = $a_six;

        //Monitor
        $mon_one = $request->monitor_one;
        $moni_one = "";
        if(count($mon_one) != 0){
            for($counter = 0; $counter < count($mon_one); $counter++){
                $moni_one .= $mon_one[$counter] . ",";
            }
            $moni_one = substr($moni_one, 0, -1);
            $ad->monitor_one = $moni_one;
        }
        $ad->monitor_one = $moni_one;

        $mon_two = $request->monitor_two;
        $moni_two = "";
        if(count($mon_two) != 0){
            for($counter = 0; $counter < count($mon_two); $counter++){
                $moni_two .= $mon_two[$counter] . ",";
            }
            $moni_two = substr($moni_two, 0, -1);
            $ad->monitor_two = $moni_two;
        }
        $ad->monitor_two = $moni_two;

        $mon_three = $request->monitor_three;
        $moni_three = "";
        if(count($mon_three) != 0){
            for($counter = 0; $counter < count($mon_three); $counter++){
                $moni_three .= $mon_three[$counter] . ",";
            }
            $moni_three = substr($moni_three, 0, -1);
            $ad->monitor_three = $moni_three;
        }
        $ad->monitor_three = $moni_three;

        //Collaborate/Consult with
        $collab_one = $request->collab_one;
        $new_collab_one = "";
        if(count($collab_one) != 0){
            for($counter = 0; $counter < count($collab_one); $counter++){
                $new_collab_one .= $collab_one[$counter] . ",";
            }
            $new_collab_one = substr($new_collab_one, 0, -1);
            $ad->collab_one = $new_collab_one;
        }
        $ad->collab_one = $new_collab_one;

        $collab_two = $request->collab_two;
        $new_collab_two = "";
        if(count($collab_two) != 0){
            for($counter = 0; $counter < count($collab_two); $counter++){
                $new_collab_two .= $collab_two[$counter] . ",";
            }
            $new_collab_two = substr($new_collab_two, 0, -1);
            $ad->collab_one = $new_collab_two;
        }
        $ad->collab_two = $new_collab_two;

        $collab_three = $request->collab_three;
        $new_collab_three = "";
        if(count($collab_three) != 0){
            for($counter = 0; $counter < count($collab_three); $counter++){
                $new_collab_three .= $collab_three[$counter] . ".";
            }
            $new_collab_three = substr($new_collab_three, 0, -1);
            $ad->collab_three = $new_collab_three;
        }
        $ad->collab_three = $new_collab_three;

        $collab_four = $request->collab_four;
        $new_collab_four = "";
        if(count($collab_four) != 0){
            for($counter = 0; $counter < count($collab_four); $counter++){
                $new_collab_four .= $collab_four[$counter] . ",";
            }
            $new_collab_four = substr($new_collab_four, 0, -1);
            $ad->collab_four = $new_collab_four;
        }
        $ad->collab_four = $new_collab_four;

        //Coordinate
        $coord_one = $request->coordinate_one;
        $new_coord_one = "";
        if(count($coord_one) != 0){
            for($counter = 0; $counter < count($coord_one); $counter++){
                $new_coord_one .= $coord_one[$counter] . ",";
            }
            $new_coord_one = substr($new_coord_one, 0, -1);
            $ad->coordinate_one = $new_coord_one;
        }
        $ad->coordinate_one = $new_coord_one;

        $coord_two = $request->coordinate_two;
        $new_coord_two = "";
        if(count($coord_two) != 0){
            for($counter = 0; $counter < count($coord_two); $counter++){
                $new_coord_two .= $coord_two[$counter] . ",";
            }
            $new_coord_two = substr($new_coord_two, 0, -1);
            $ad->coordinate_two = $new_coord_two;
        }
        $ad->coordinate_two = $new_coord_two;

        //Other
        $other_one = $request->other_one;
        $new_other_one = "";
        if(count($other_one) != 0){
            for($counter = 0; $counter < count($other_one); $counter++){
                $new_other_one .= $other_one[$counter] . ",";
            }
            $new_other_one = substr($new_other_one, 0, -1);
            $ad->other_one = $new_other_one;
        }
        $ad->other_one = $new_other_one;
        
        $other_two = $request->other_two;
        $new_other_two = "";
        if(count($other_two) != 0){
            for($counter = 0; $counter < count($other_two); $counter++){
                $new_other_two .= $other_two[$counter] . ",";
            }
            $new_other_two = substr($new_other_two, 0, -1);
            $ad->other_two = $new_other_two;
        }
        $ad->other_two = $new_other_two;

        $other_three = $request->other_three;
        $new_other_three = "";
        if(count($other_three) != 0){
            for($counter = 0; $counter < count($other_three); $counter++){
                $new_other_three .= $other_three[$counter] . ",";
            }
            $new_other_three = substr($new_other_three, 0, -1);
            $ad->other_three = $new_other_three;
        }
        $ad->other_three = $new_other_three;

        $other_four = $request->other_four;
        $new_other_four = "";
        if(count($other_four) != 0){
            for($counter = 0; $counter < count($other_four); $counter++){
                $new_other_four .= $other_four[$counter] . ",";
            }
            $new_other_four = substr($new_other_four, 0, -1);
            $ad->other_four = $new_other_four;
        }
        $ad->other_four = $new_other_four;
        $ad->save();


        /*$added_row_name = $request->added_row_name;
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

        for($counter = 0; $counter < count($added_row_name); $counter++){
            $added = new AddedDeliverables;
            $added->tender_id = $request->get('idd');
            $added->row_name = $added_row_name;
            $added->details = $added_details;
            $added->raci = $add_raci;
            $added->num = $add_num;
            $added->save();
        }*/

        // return $this->gettend($request->get('idd'));
        return ('success');
        // echo $ins_n;

    }

    public function questionnaireSave(Request $request){
        
        $data = $request->questions;
        $new = substr($data, 0, -1);
        $ques = new TenderPreQualificationQuestionnaire;
        $ques->tender_id = $request->get('idd');
        $ques->question = $new;
        $ques->save();

        // $ques = new TenderPreQualificationQuestionnaire;
        // $ques->tender_id = 180;
        // $ques->question = 'WILKINS';
        // $ques->save();

        return 'SAVED!!!';
    }

    public function questionnaireEdit(Request $request)
    {
        $data = $request->questions;
        $new = substr($data, 0, -1);
        TenderPreQualificationQuestionnaire::where('pre_id', $request->get('idd'))
        ->update([
            'question' => $new
        ]);
    }

    public function tenderQualityStore(Request $request){

        $qual = new TenderQualityAssurance;
        $qual->tender_id = $request->get('idd');
        $qual->created_by_fname = $request->get('created_fname');
        $qual->created_by_lname = $request->get('created_lname');
        $qual->created_data = $request->get('created_date');
        $qual->checked_by_fname = $request->get('checked_fname');
        $qual->checked_by_lname = $request->get('checked_lname');
        $qual->checked_date = $request->get('checked_date');
        $qual->approved_by_fname = $request->get('approved_fname');
        $qual->approved_by_lname = $request->get('approved_lname');
        $qual->approved_date = $request->get('approved_date');
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
        $delivs = AddedDeliverables::where('tender_id', $tenid)->get();
        $meetings = AddedMeetings::where('tender_id', $tenid)->get();
        $design = AddedDesign::where('tender_id', $tenid)->get();
        $advises = AddedAdvise::where('tender_id', $tenid)->get();
        $scopes = TenderScopeDeliverables::where('tender_id', $tenid)->get();
        $scopesm = TenderScopeMeetings::where('tender_id', $tenid)->get();
        $scopesd = TenderDesignConsiderations::where('tender_id', $tenid)->get();
        $scopesa = TenderScopeAdvise::where('tender_id', $tenid)->get();
        $quests = TenderPreQualificationQuestionnaire::where('tender_id', $tenid)->get();
        $company = CompInfo::all()->pluck('comp_name')->toArray();

        // return response()->json(array(
        //     'tender' => $tender,
        //     'bonds' => $bonds,
        //     'appointment' => $appointment,
        //     'eval' => $eval
        // ));
        
        // if(sizeof($scopes) == 0){
        //     $scopes = null;

        // }
        // echo ($scopes);
        $questions = array();
        $qid = "";
        if(sizeof($quests) != 0){
            $string = explode("^",$quests[0]['question']);
            $qid = $quests[0]['pre_id'];
            
            foreach ($string as $str) {
                $questions[] = $str; 
            }
        }
        // var_dump(response()->json($company));
        // if(in_array('test',array_column($company, 'comp_name')))   
        //     echo 'tang ina';
        // echo $scopesm[0]['pre_app_assumed_duration'];
        return view('create_tender')->with([
            'tender' => $tender,
            'bonds' => $bonds,
            'appointment' => $appointment,
            'eval' => $eval,
            'delivs' => $delivs,
            'meetings' => $meetings,
            'designs' => $design,
            'advises' => $advises,
            'quests' => $questions,
            'questsid' => $qid,
            'scopes' => $scopes,
            'scopesm' => $scopesm,
            'scopesd' => $scopesd,
            'scopesa' => $scopesa,
            'company' => $company
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

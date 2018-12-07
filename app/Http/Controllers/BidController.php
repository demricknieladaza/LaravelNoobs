<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use App\UserAccountsModel;
use App\Tender;
use App\ProjectInformations;
use App\SubmittedTenders;
use App\DraftedTenders;
use App\TenderQuery;
use App\Individuals;
use App\TenderPreQualificationQuestionnaire;
use App\Bids;
use App\BidApproach;
use App\BidQualityAssurance;
use App\BidIndividuals;
use App\BidMeetings;
use App\BidAdvise;
use App\TenderAppointment;

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

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
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
    public function edit(Request $request, $id)
    {
        $tender_id = $id;
        $user = $request->session()->get('id');
        $tender = Tender::where('tender_id', $tender_id)->first();

        $project = ProjectInformations::where('project_record_id', $tender->project_record_id)->first();

        $indi = Individuals::where('user_id', $user)->orderBy('first_name', 'asc')->get();

        $quest = TenderPreQualificationQuestionnaire::where('tender_id', $tender_id)->first();

        $appointment = TenderAppointment::where('tender_id', $tender_id)->first();

        $insur_name = explode(",", $appointment->insurance_name);
        $insur_level = explode(",", $appointment->insurance_level);
        $counter = 0;

        $delivs = AddedDeliverables::where('tender_id', $id)->get();
        $meetings = AddedMeetings::where('tender_id', $id)->get();
        $design = AddedDesign::where('tender_id', $id)->get();
        $advises = AddedAdvise::where('tender_id', $id)->get();
        $scopes = TenderScopeDeliverables::where('tender_id', $id)->get();
        $scopesm = TenderScopeMeetings::where('tender_id', $id)->get();
        $scopesd = TenderDesignConsiderations::where('tender_id', $id)->get();
        $scopesa = TenderScopeAdvise::where('tender_id', $id)->get();

        foreach ($insur_name as $key) {
            $insur[] = array('name' => $insur_name[$counter], 'level' => $insur_level[$counter]);
            $counter++;
        }

        $pr = DB::table('bid_records_tbl')->where('user_id',$request->session()->get('id'))->where('tender_id',$id)->first();

        return view('bid')->with([
            'tender' => $tender,
            'project' => $project,
            'individuals' => $indi,
            'pre_qual' => $quest,
            'appointment' => $appointment,
            'insur' => $insur,
            'delivs' => $delivs,
            'meetings' => $meetings,
            'designs' => $design,
            'advises' => $advises,
            'scopes' => $scopes,
            'scopesm' => $scopesm,
            'scopesd' => $scopesd,
            'scopesa' => $scopesa,
            'tr' => $pr
        ]);

        // return $appointment;
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
    public function bid_scope(Request $request){
        // dd($request->get('strat'));
        $strat = implode(",", $request->get('strat'));
        $prog = implode(",", $request->get('prog'));
        $fea = implode(",", $request->get('fea'));
        $de = implode(",", $request->get('de'));
        $sit = implode(",", $request->get('sit'));
        $inf = implode(",", $request->get('inf'));
        $proj = implode(",", $request->get('proj'));
        $risk = implode(",", $request->get('risk'));
        $hand = implode(",", $request->get('hand'));
        $exec = implode(",", $request->get('exec'));
        $prop = implode(",", $request->get('prop'));
        DB::table('bid_deliverables_tbl')->insert(
            ['tender_id'=>$request->get('tender_id'),
            'user_id'=>$request->session()->get('id'),
            'strategic'=>$strat,
            'programme'=>$prog,
            'study' => $fea,
            'drm' => $de,
            'info_report' => $sit,
            'info_exchange' => $inf,
            'proj_brief' => $proj,
            'risk' => $risk,
            'handover' => $hand,
            'proj_exec' => $exec,
            'design_proposal' => $prop
        ]
        );


        //Bid Meetings
        $preapp = implode(",", $request->get('preapp'));
        $sitev = implode(",", $request->get('sitev'));
        $ribast = implode(",", $request->get('ribast'));
        $inspect = implode(",", $request->get('inspect'));
        $meeting = new BidMeetings;
        $meeting->tender_id = $request->get('tender_id');
        $meeting->user_id = $request->session()->get('id');
        $meeting->pre_application_meetings = $preapp;
        $meeting->site_visits = $sitev;
        $meeting->riba_stage = $ribast;
        $meeting->site_inspection = $inspect;
        $meeting->save();

        //Bid Advise
        $adone = implode(",", $request->get('adone'));
        $adtwo = implode(",", $request->get('adtwo'));
        $adthree = implode(",", $request->get('adthree'));
        $adfour = implode(",", $request->get('adfour'));
        $adfive = implode(",", $request->get('adfive'));
        $adsix = implode(",", $request->get('adsix'));
        $colone = implode(",", $request->get('colone'));
        $coltwo = implode(",", $request->get('coltwo'));
        $colthree = implode(",", $request->get('colthree'));
        $colfour = implode(",", $request->get('colfour'));
        $corone = implode(",", $request->get('corone'));
        $cortwo = implode(",", $request->get('cortwo'));
        $othone = implode(",", $request->get('othone'));
        $othtwo = implode(",", $request->get('othtwo'));
        $oththree = implode(",", $request->get('oththree'));
        $othfour = implode(",", $request->get('othfour'));

        $advise = new BidAdvise;
        $advise->user_id = $request->session()->get('id');
        $advise->tender_id = $request->get('tender_id');
        $advise->advise_one = $adone;
        $advise->advise_two = $adtwo;
        $advise->advise_three = $adthree;
        $advise->advise_four = $adfour;
        $advise->advise_five = $adfive;
        $advise->advise_six = $adsix;
        $advise->collab_one = $colone;
        $advise->collab_two = $coltwo;
        $advise->collab_three = $colthree;
        $advise->collab_four = $colfour;
        $advise->coordinate_one = $corone;
        $advise->coordinate_two = $cortwo;
        $advise->other_one = $othone;
        $advise->other_two = $othtwo;
        $advise->other_three = $oththree;
        $advise->other_four = $othfour;
        $advise->save();

    }

    public function getCredentials(Request $request,$id){

        $tender_id = $id;
        $user = $request->session()->get('id');
        $tender = Tender::where('tender_id', $tender_id)->first();

        $project = ProjectInformations::where('project_record_id', $tender->project_record_id)->first();

        $indi = Individuals::where('user_id', $user)->get();

        $quest = TenderPreQualificationQuestionnaire::where('tender_id', $tender_id)->first();


        return view('bid')->with([
            'tender' => $tender,
            'project' => $project,
            'individuals' => $indi,
            'pre_qual' => $quest
        ]);
        // return $quest;

    }

    public function submitBid(Request $request){

        //Submitted Tenders
        $sub = new SubmittedTenders;
        $sub->user_id = $request->session()->get('id');
        $sub->project_record_id = $request->get('project_id');
        $sub->tender_id = $request->get('tender_id');
        $sub->save();
        //Bids
        $bid = new Bids;
        $bid->project_record_id = $request->get('project_id');
        $bid->tender_id = $request->get('tender_id');
        $bid->user_id = $request->session()->get('id');
        $bid->save();

        $tender = Tender::find($request->get('tender_id'));
        $tender->bids_received = $tender->bids_received + 1;
        $tender->update();

        return 'SUCCESS!';
    }

    public function saveBid(Request $request, $id){
        // $tender = $id;
        
        $draft = new DraftedTenders;
        $draft->user_id = $request->session()->get('id');
        $draft->project_record_id = $request->input('project_record_id');
        $draft->tender_id = $id;
        $draft->save();

        $tender = Tender::where('tender_id', $id)->first();

        $project = ProjectInformations::where('project_record_id', $request->input('project_record_id'))->first();
        
        $quest = TenderPreQualificationQuestionnaire::where('tender_id', $id)->first();

        $appointment = TenderAppointment::where('tender_id', $id)->first();

        $qual = new BidQualityAssurance;
        $qual->tender_id = $id;
        $qual->created_by_fname = $request->input('created_by_fname');
        $qual->created_by_sname = $request->input('created_by_sname');
        $qual->created_by_date = $request->input('created_by_date');
        $qual->checked_by_fname = $request->input('checked_by_fname');
        $qual->checked_by_sname = $request->input('checked_by_sname');
        $qual->checked_by_date = $request->input('checked_by_date');
        $qual->approved_by_fname = $request->input('approved_by_fname');
        $qual->approved_by_sname = $request->input('approved_by_sname');
        $qual->approved_by_date = $request->input('approved_by_date');
        $qual->save();

        // return view('bid')->with([
        //     'tender' => $tender,
        //     'project' => $project,
        //     'pre_qual' => $quest,
        //     'appointment' => $appointment
        // ]);

        return 'SUCCESS!!';
    }

    public function saveQuery(Request $request){

        $query = new TenderQuery;
        $query->project_record_id = $request->get('project_record_id');
        $query->tender_id = $request->get('tender_id');
        $query->question = $request->get('question');
        $query->save();

        DB::table('tender_tbl')->where('tender_id',$request->get('tender_id'))
                            ->increment('queries_received');
        return 'SAVED!!!';

    }

    public function saveApproach(Request $request){
        
        $user = $request->session()->get('id');
        $tender_id = $request->input('tender_id');
        $tender = Tender::where('tender_id', $tender_id)->first();

        $project = ProjectInformations::where('project_record_id', $tender->project_record_id)->first();

        $indi = Individuals::where('user_id', $user)->get();

        $quest = TenderPreQualificationQuestionnaire::where('tender_id', $tender_id)->first();

        $bid = new BidApproach;
        $bid->tender_id = $tender_id;

        $comments = $request->comments_constraints;
        $new_com = "";
        if(count($comments) != 0){
            for($counter = 0; $counter < count($comments); $counter++){
                $new_com .= $comments[$counter] . "^";
            }
            $new_com = substr($new_com, 0, -1);
            $bid->comments_on_constraints = $new_com;
        }
        $bid->comments_on_constraints = $new_com;

        $name_of_comments = "";

        if($request->hasFile('comments_images')){
            $files = $request->file('comments_images');
            foreach($files as $file){
                $filenameWithExt = $file->getClientOriginalName();
        
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            
                $extension = $file->getClientOriginalExtension();
            
                $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
                
                $path = $file->storeAs('public/comment_images', $filenameToStore); 
                $name_of_comments .= $filenameToStore . "/";
            }
        }
        $name_of_comments = substr($name_of_comments, 0, -1);
        $bid->comments_images = $name_of_comments;

        $solutions = $request->solutions;
        $new_sol = "";
        if(count($solutions) != 0){
            for($counter = 0; $counter < count($solutions); $counter++){
                $new_sol .= $solutions[$counter] . "^";
            }
            $new_sol = substr($new_sol, 0, -1);
            $bid->solutions = $new_sol;
        }
        $bid->solutions = $new_sol;

        $name_of_solutions = "";

        if($request->hasFile('solutions_images')){
            $files = $request->file('solutions_images');
            foreach($files as $file){
                $filenameWithExt = $file->getClientOriginalName();
        
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            
                $extension = $file->getClientOriginalExtension();
            
                $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
                
                $path = $file->storeAs('public/solutions_images', $filenameToStore); 
                $name_of_solutions .= $filenameToStore . "/";
            }
        }
        $name_of_solutions = substr($name_of_solutions, 0, -1);
        $bid->solutions_images = $name_of_solutions;
        $bid->user_id = $request->session()->get('id');
        $bid->save();

        return "save";
        // return "ERRGEZSHYTeuyigakwsyjuy";
        // return view('bid')->with([
        //     'tender' => $tender,
        //     'project' => $project,
        //     'individuals' => $indi,
        //     'pre_qual' => $quest
        // ]);
    }

    public function saveBidIndividuals(Request $request){
        
        $ind = $request->individual;

        $individual = new BidIndividuals;
        $individual->tender_id = $request->get('tender_id');
        $individual->ind_id = implode(',', $ind);
        $individual->user_id = $request->session()->get('id');
        $individual->save();

        // dd($ind);

        return 'imu mama';


    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\ProjectInformation;
use App\Tender;
use App\SavedTenders;

class UsersController extends Controller
{
    public function welcome_controller()
    {
    	return view('welcome');
    }

    public function publish_controller(Request $request)
    {

    	if($request->session()->has('fullname'))
        {
           $user = $request->session()->get('id');
           $data = DB::table('project_information_tbl')
                    ->where('user_id', $user)
                    //Order By GIDO!!!!!!!!!@!!@
                    ->orderBy('created_at','DESC')
                    ->get();
           return view('publish')->with('projects', $data);   
        }
        else
        {
           return redirect('log_reg');
        }
    }

    public function searchProjects(Request $request){

        $title = $request->get('search');
        $user = $request->session()->get('id');
        // $projects = ProjectInformation::where('project_title', $title)->get();
        $projects = DB::table('project_information_tbl')
                        ->where('user_id', $user)
                        ->where('project_title', $title)
                        ->get();

        return view('publish')->with('projects', $projects);
        // return $projects;
        
    }

    public function winwork_controller(Request $request)
    {
        if($request->session()->has('fullname'))
        {
    	   return view('winwork');
        }
        else
        {
           return redirect('log_reg');
        }
    }

    public function pds_controller()
    {
    	return view('pds');
    }

    public function bid_controller()
    {
    	return view('bid');
    }

    public function dashboard_controller(Request $request)
    {
        if($request->session()->has('fullname'))
        {
           return view('dashboard');
        }
        else
        {
           return redirect('log_reg');
        }
    }

    public function emp_dashboard_controller(Request $request)
    {
        
        if($request->session()->has('fullname'))
        {
           return view('emp_dashboard');
        }
        else
        {
           return redirect('log_reg');
        }
    }

    public function tend_dashboard_controller(Request $request)
    {   
        $user = $request->session()->get('id');
        $oppur = Tender::where('status', 'Active')->get();
        $saved = DB::table('saved_tenders_tbl')
                    ->where('saved_tenders_tbl.user_id', $user)
                    ->join('tender_tbl as te', 'saved_tenders_tbl.tender_id', '=', 'te.tender_id' )
                    ->join('project_information_tbl as pj', 'saved_tenders_tbl.project_record_id', '=', 'pj.project_record_id')
                    ->get();
    
        
        return view('tend_dashboard')->with([
            'saved' => $saved,
            'oppur' => $oppur
        ]);
        // return $saved;
    }  

    public function benchmark_dashboard_controller()
    {
        return view('benchmark_dashboard');
    }  

    public function policies_controller()
    {
        return view('policies');
    }
      public function project_dashboard_controller()
    {
        return view('project_dashboard');
    }
    public function datasheet_controller()
    {
        return view('datasheet');
    }
    public function active_page_controller()
    {
        return view('active_page');
    }
    public function success_page_controller()
    {
        return view('success_page');
    }
    public function unsuccess_page_controller()
    {
        return view('unsuccess_page');
    }
    public function canada_hover_controller()
    {
        return view('canada_hover');
    }
    public function log_reg_controller()
    {
        return view('log_reg');
    }
    public function membership_controller()
    {
        return view('membership');
    }
    public function users_controller()
    {
        return view('users');
    }
    public function comp_orga_controller()
    {
        return view('comp_orga');
    }
    public function comp_indi_controller()
    {
        return view('comp_indi');
    }
     public function organisation_controller()
    {
        return view('organisation');
    }
     public function individuals_controller()
    {
        return view('individuals');
    }
     public function scopey_controller()
    {
        return view('scopey');
    }
     public function tenderey_controller()
    {
        return view('tenderey');
    }
     public function createy_controller()
    {
        return view('createy');
    }
}

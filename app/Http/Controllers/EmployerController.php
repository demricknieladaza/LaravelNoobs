<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployerController extends Controller
{
    public function employer(Request $request){
    	$date_now = date("Y-m-d");
    	if($request->session()->get('id')==null){
    		return redirect('/');
    	}
    	$projects = DB::table('project_information_tbl')->select('project_record_id','project_title')->where('user_id',$request->session()->get('id'))->get()->toArray();

    	foreach ($projects as $key) {
    		$reqinfo = DB::table('tender_queries_tbl')->where('project_record_id',$key->project_record_id)->get()->toArray();
    		foreach ($reqinfo as $value) {
    			$reqinfos[] = array('project'=>$key->project_title,'issue'=>'Request for information','raised'=>$value->created_at);
    		}
    		
    		$feedbacktend = DB::table('tender_tbl')->where('project_record_id',$key->project_record_id)->get()->toArray();
    		foreach ($feedbacktend as $values) {
    			if($date_now > $values->created_at){
    				$reqinfos[] = array('project'=>$key->project_title,'issue'=>'Tender feedback','raised'=>$values->created_at);
    			}
    		}

    		$tend = DB::table('tender_tbl')->where('project_record_id',$key->project_record_id)->get()->toArray();
    		foreach ($tend as $k) {
    			$active = [];
    			$drafted = [];
    			if($k->status=='Active'){
    				array_push($active,array('id'=>$k->tender_id,'service'=>$k->services));
    			}
    			elseif ($k->status=='Drafted') {
    				array_push($drafted,array('id'=>$k->tender_id,'service'=>$k->services));
    			}
    			$activeproj[] = array('proj'=>$key->project_title,'active'=>$active,'drafted'=>$drafted);
    		}
    	}



    	$reqinfossort = $this->array_orderby($reqinfos, 'raised', SORT_DESC);

    	// var_dump($activeproj);
    	return view('emp_dashboard')->with(['reqinfossort'=>$reqinfossort,'activeproj'=>$activeproj]);
    }

    function array_orderby()
    {
        $args = func_get_args();
        $data = array_shift($args);
        foreach ($args as $n => $field) {
            if (is_string($field)) {
                $tmp = array();
                foreach ($data as $key => $row)
                    $tmp[$key] = $row[$field];
                $args[$n] = $tmp;
                }
        }
        $args[] = &$data;
        call_user_func_array('array_multisort', $args);
        return array_pop($args);
    }
}

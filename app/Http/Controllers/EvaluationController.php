<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EvaluationController extends Controller
{
    public function evaluation(){
    	$tid = 1;
    	$projid = 1;
    	$tenders = DB::table('bid_records_tbl')->where('tender_id',$tid)->get()->toArray();
    	$tend_info = DB::table('tender_tbl')->where('tender_id',$tid)->first();
    	$queries = DB::table('tender_queries_tbl')->where('tender_id',$tid)->get()->toArray();

    	foreach ($tenders as $key) {
    		$activity[] = array(
    			'date'=> date('m/d/Y',strtotime($key->created_at)),
    			'time'=> date('H:i',strtotime($key->created_at)),
    			'activity'=>'Submit bid'
    		);
    	}
    	foreach ($queries as $keys) {
    		$activity[] = array(
    			'date'=> date('m/d/Y',strtotime($keys->created_at)),
    			'time'=> date('H:i',strtotime($keys->created_at)),
    			'activity'=>'Query'
    		);
            if($keys->response!=null){
                $activity[] = array(
                    'date'=> date('m/d/Y',strtotime($keys->updated_at)),
                    'time'=> date('H:i',strtotime($keys->updated_at)),
                    'activity'=>'Response to query'
                );
            }
    	}

    	// var_dump($activity);
    	$activitysort = $this->array_orderby($activity, 'date', SORT_ASC);

    	$project_info = DB::table('project_information_tbl')->where('project_record_id',$projid)->first();
    	// dd($tend_info);

        $dataPoints1 = array(
            array("x"=> 78.7, "y"=> 1.84, "z"=>320.896)
        );
        $dataPoints2 = array(
            array("x"=> 75, "y"=> 2.84, "z"=>420.896)
        );

        $arr[] = array(
            "type" => "bubble",
            "showInLegend"=> true,
            "name" => "test1",
            "dataPoints" => $dataPoints1
        );
        $arr[] = array(
            "type" => "bubble",
            "showInLegend"=> true,
            "name" => "test2",
            "dataPoints" => $dataPoints2
        );

    	return view('test')->with([
    		'proj_info'=>$project_info,
    		'tend_info'=>$tend_info,
    		'activity'=>$activitysort,
            'data'=>$arr
    	]);
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

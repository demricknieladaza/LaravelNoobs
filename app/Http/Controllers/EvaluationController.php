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

        $evalwei = DB::table('tender_evaluation_tbl')->where('tender_id',$tid)->first();

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

        foreach ($tenders as $key) {
            $org_id = DB::table('organisation_tbl')->where('user_id',$key->user_id)->first();
            // echo $org_id->company_name;
            $arr[] = array(
                "type" => "bubble",
                "showInLegend"=> true,
                "name" => $org_id->company_name,
                "dataPoints" => array(array("x"=> $this->getorgprojectexp($org_id->org_id,$key->project_record_id,$key->tender_id), "y"=> $this->getquanti($key->user_id,$key->tender_id), "z"=>0)) 
            );
        }

        foreach ($tenders as $key) {
            $org_id = DB::table('organisation_tbl')->where('user_id',$key->user_id)->first();
            // echo $org_id->company_name;
            $quali[] = $this->getorgprojectexp($org_id->org_id,$key->project_record_id,$key->tender_id);
        }
        foreach ($tenders as $key) {
            $org_id = DB::table('organisation_tbl')->where('user_id',$key->user_id)->first();
            // echo $org_id->company_name;
            $quanti[] = $this->getquanti($key->user_id,$key->tender_id);
        }
        $qualitative = array('name'=>"Qualitative",'max'=>'5','weighting'=>$evalwei->qualitative);
        $quantitative = array('name'=>"Quantitative",'max'=>'5','weighting'=>$evalwei->quantitative);
        $risk = array('name'=>"Risk",'max'=>'5','weighting'=>$evalwei->risk);

        foreach ($tenders as $key) {
            $org_id = DB::table('organisation_tbl')->where('user_id',$key->user_id)->first();
            $qualmatrix[] = $this->repgetorgprojectexp($org_id->org_id,$projid,$tid);
        }
        // dd($qualmatrix);

        foreach ($qualmatrix as $key) {
            $totmat = $key[0]['proj_ex_nom'] + $key[0]['vos_nom'] + $key[0]['awards_nom'] + $key[0]['accre_nom'] + $key[0]['rel_nom'];
            $orgmatrixnom[] = array('label'=>$key[0]['name'],'y' => $totmat);
        }

        foreach ($qualmatrix as $key) {
            $totmat = $key[0]['proj_ex_wei'] + $key[0]['vos_wei'] + $key[0]['awards_wei'] + $key[0]['accre_wei'] + $key[0]['rel_wei'];
            $matrixallwei[] = array('label'=>$key[0]['name'],'y' => $totmat);
        }
        // org summary scores
        foreach ($qualmatrix as $key) {
            // $totmat = $key[0]['proj_ex_nom'] + $key[0]['vos_nom'] + $key[0]['awards_nom'] + $key[0]['accre_nom'] + $key[0]['rel_nom'];
            $nomscore[] = array(
                'proj_ex'=> array('label'=>$key[0]['name'],'y' => $key[0]['proj_ex_nom']),
                'vos'=> array('label'=>$key[0]['name'],'y' => $key[0]['vos_nom']),
                'awards'=> array('label'=>$key[0]['name'],'y' => $key[0]['awards_nom']),
                'acc'=> array('label'=>$key[0]['name'],'y' => $key[0]['accre_nom']),
                'rel'=> array('label'=>$key[0]['name'],'y' => $key[0]['rel_nom'])
            );
        }

        foreach ($qualmatrix as $key) {
            // $totmat = $key[0]['proj_ex_wei'] + $key[0]['vos_wei'] + $key[0]['awards_wei'] + $key[0]['accre_wei'] + $key[0]['rel_wei'];
            $weiscores[] = array(
                'proj_ex'=> array('label'=>$key[0]['name'],'y' => $key[0]['proj_ex_wei']),
                'vos'=> array('label'=>$key[0]['name'],'y' => $key[0]['vos_wei']),
                'awards'=> array('label'=>$key[0]['name'],'y' => $key[0]['awards_wei']),
                'acc'=> array('label'=>$key[0]['name'],'y' => $key[0]['accre_wei']),
                'rel'=> array('label'=>$key[0]['name'],'y' => $key[0]['rel_wei'])
            );
        }

        foreach ($qualmatrix as $key) {
            // $totmat = $key[0]['proj_ex_nom'] + $key[0]['vos_nom'] + $key[0]['awards_nom'] + $key[0]['accre_nom'] + $key[0]['rel_nom'];
            $indnomscore[] = array(
                'proj_ex'=> array('label'=>$key[0]['name'],'y' => 0),
                'vos'=> array('label'=>$key[0]['name'],'y' => 0),
                'awards'=> array('label'=>$key[0]['name'],'y' => 0),
                'acc'=> array('label'=>$key[0]['name'],'y' => 0),
                'rel'=> array('label'=>$key[0]['name'],'y' => 0)
            );
        }

        // end org summary scores

        foreach ($qualmatrix as $key) {
            $orgmatrixwei[] = array('label'=>$key[0]['name'],'y' => 0);
        }
        
        // QUANTITATIVE
        foreach ($tenders as $key) {
            $org_id = DB::table('organisation_tbl')->where('user_id',$key->user_id)->first();
            $quantsum[] = array('y'=>$this->getquanti($key->user_id,$key->tender_id),'label'=>$org_id->company_name); 

        }
        // var_dump($quantsum);

        // fee proposal 

        

        // var_dump($strat);
        $_0 = 0;
        $_1 = 0;
        $_2 = 0;
        $_3 = 0;
        $_4 = 0;
        $_5 = 0;
        $_6 = 0;
        $_7 = 0;
        $fees = DB::table('tender_scope_deliverables_tbl')->where('tender_id',$tid)->first();
        
        $strategic_num = explode(",",$fees->strategic_num);
        $pprogramme_num = explode(",",$fees->pprogramme_num);
        $feasibility_num = explode(",",$fees->feasibility_num);
        $design_num = explode(",",$fees->design_num);
        $site_num = explode(",",$fees->site_num);
        $information_num = explode(",",$fees->information_num);
        $project_num = explode(",",$fees->project_num);
        $risk_num = explode(",",$fees->risk_num);
        $handover_num = explode(",",$fees->handover_num);
        $execution_num = explode(",",$fees->execution_num);
        $proposal_num = explode(",",$fees->proposal_num);

        foreach ($tenders as $key) {
            $org_id = DB::table('organisation_tbl')->where('user_id',$key->user_id)->first();
            $tenddeliv = DB::table('bid_deliverables_tbl')->where('tender_id',$key->tender_id)->where('user_id',$key->user_id)->first();

            $bidstrat = explode(",", $tenddeliv->strategic);
            $bidprog = explode(",", $tenddeliv->programme);
            $bidstud = explode(",", $tenddeliv->study);
            $biddrm = explode(",", $tenddeliv->drm);
            $bidinf = explode(",", $tenddeliv->info_report);
            $bidinfe = explode(",", $tenddeliv->info_exchange);
            $bidproj = explode(",", $tenddeliv->proj_brief);
            $bidrisk = explode(",", $tenddeliv->risk);
            $bidhand = explode(",", $tenddeliv->handover);
            $bidproj = explode(",", $tenddeliv->proj_exec);
            $biddes = explode(",", $tenddeliv->design_proposal);

            for($c=0;count($proposal_num) > $c; $c++){
                if($proposal_num[$c] == 0){
                    $_0 += (int)$biddes[$c];
                }
                elseif ($proposal_num[$c] == 1){
                    $_1 += (int)$biddes[$c];
                }
                elseif ($proposal_num[$c] == 2){
                    $_2 += (int)$biddes[$c];
                }
                elseif ($proposal_num[$c] == 3){
                    $_3 += (int)$biddes[$c];
                }
                elseif ($proposal_num[$c] == 4){
                    $_4 += (int)$biddes[$c];
                }
                elseif ($proposal_num[$c] == 5){
                    $_5 += (int)$biddes[$c];
                }
                elseif ($proposal_num[$c] == 6){
                    $_6 += (int)$biddes[$c];
                }
                elseif ($proposal_num[$c] == 7){
                    $_7 += (int)$biddes[$c];
                }
            }
            for($c=0;count($execution_num) > $c; $c++){
                if($execution_num[$c] == 0){
                    $_0 += (int)$bidproj[$c];
                }
                elseif ($execution_num[$c] == 1){
                    $_1 += (int)$bidproj[$c];
                }
                elseif ($execution_num[$c] == 2){
                    $_2 += (int)$bidproj[$c];
                }
                elseif ($execution_num[$c] == 3){
                    $_3 += (int)$bidproj[$c];
                }
                elseif ($execution_num[$c] == 4){
                    $_4 += (int)$bidproj[$c];
                }
                elseif ($execution_num[$c] == 5){
                    $_5 += (int)$bidproj[$c];
                }
                elseif ($execution_num[$c] == 6){
                    $_6 += (int)$bidproj[$c];
                }
                elseif ($execution_num[$c] == 7){
                    $_7 += (int)$bidproj[$c];
                }
            }
            for($c=0;count($handover_num) > $c; $c++){
                if($handover_num[$c] == 0){
                    $_0 += (int)$bidhand[$c];
                }
                elseif ($handover_num[$c] == 1){
                    $_1 += (int)$bidhand[$c];
                }
                elseif ($handover_num[$c] == 2){
                    $_2 += (int)$bidhand[$c];
                }
                elseif ($handover_num[$c] == 3){
                    $_3 += (int)$bidhand[$c];
                }
                elseif ($handover_num[$c] == 4){
                    $_4 += (int)$bidhand[$c];
                }
                elseif ($handover_num[$c] == 5){
                    $_5 += (int)$bidhand[$c];
                }
                elseif ($handover_num[$c] == 6){
                    $_6 += (int)$bidhand[$c];
                }
                elseif ($handover_num[$c] == 7){
                    $_7 += (int)$bidhand[$c];
                }
            }
            for($c=0;count($risk_num) > $c; $c++){
                if($risk_num[$c] == 0){
                    $_0 += (int)$bidrisk[$c];
                }
                elseif ($risk_num[$c] == 1){
                    $_1 += (int)$bidrisk[$c];
                }
                elseif ($risk_num[$c] == 2){
                    $_2 += (int)$bidrisk[$c];
                }
                elseif ($risk_num[$c] == 3){
                    $_3 += (int)$bidrisk[$c];
                }
                elseif ($risk_num[$c] == 4){
                    $_4 += (int)$bidrisk[$c];
                }
                elseif ($risk_num[$c] == 5){
                    $_5 += (int)$bidrisk[$c];
                }
                elseif ($risk_num[$c] == 6){
                    $_6 += (int)$bidrisk[$c];
                }
                elseif ($risk_num[$c] == 7){
                    $_7 += (int)$bidrisk[$c];
                }
            }
            for($c=0;count($project_num) > $c; $c++){
                if($project_num[$c] == 0){
                    $_0 += (int)$bidproj[$c];
                }
                elseif ($project_num[$c] == 1){
                    $_1 += (int)$bidproj[$c];
                }
                elseif ($project_num[$c] == 2){
                    $_2 += (int)$bidproj[$c];
                }
                elseif ($project_num[$c] == 3){
                    $_3 += (int)$bidproj[$c];
                }
                elseif ($project_num[$c] == 4){
                    $_4 += (int)$bidproj[$c];
                }
                elseif ($project_num[$c] == 5){
                    $_5 += (int)$bidproj[$c];
                }
                elseif ($project_num[$c] == 6){
                    $_6 += (int)$bidproj[$c];
                }
                elseif ($project_num[$c] == 7){
                    $_7 += (int)$bidproj[$c];
                }
            }
            for($c=0;count($information_num) > $c; $c++){
                if($information_num[$c] == 0){
                    $_0 += (int)$bidinfe[$c];
                }
                elseif ($information_num[$c] == 1){
                    $_1 += (int)$bidinfe[$c];
                }
                elseif ($information_num[$c] == 2){
                    $_2 += (int)$bidinfe[$c];
                }
                elseif ($information_num[$c] == 3){
                    $_3 += (int)$bidinfe[$c];
                }
                elseif ($information_num[$c] == 4){
                    $_4 += (int)$bidinfe[$c];
                }
                elseif ($information_num[$c] == 5){
                    $_5 += (int)$bidinfe[$c];
                }
                elseif ($information_num[$c] == 6){
                    $_6 += (int)$bidinfe[$c];
                }
                elseif ($information_num[$c] == 7){
                    $_7 += (int)$bidinfe[$c];
                }
            }
            for($c=0;count($site_num) > $c; $c++){
                if($site_num[$c] == 0){
                    $_0 += (int)$bidinf[$c];
                }
                elseif ($site_num[$c] == 1){
                    $_1 += (int)$bidinf[$c];
                }
                elseif ($site_num[$c] == 2){
                    $_2 += (int)$bidinf[$c];
                }
                elseif ($site_num[$c] == 3){
                    $_3 += (int)$bidinf[$c];
                }
                elseif ($site_num[$c] == 4){
                    $_4 += (int)$bidinf[$c];
                }
                elseif ($site_num[$c] == 5){
                    $_5 += (int)$bidinf[$c];
                }
                elseif ($site_num[$c] == 6){
                    $_6 += (int)$bidinf[$c];
                }
                elseif ($site_num[$c] == 7){
                    $_7 += (int)$bidinf[$c];
                }
            }
            for($c=0;count($design_num) > $c; $c++){
                if($design_num[$c] == 0){
                    $_0 += (int)$biddrm[$c];
                }
                elseif ($design_num[$c] == 1){
                    $_1 += (int)$biddrm[$c];
                }
                elseif ($design_num[$c] == 2){
                    $_2 += (int)$biddrm[$c];
                }
                elseif ($design_num[$c] == 3){
                    $_3 += (int)$biddrm[$c];
                }
                elseif ($design_num[$c] == 4){
                    $_4 += (int)$biddrm[$c];
                }
                elseif ($design_num[$c] == 5){
                    $_5 += (int)$biddrm[$c];
                }
                elseif ($design_num[$c] == 6){
                    $_6 += (int)$biddrm[$c];
                }
                elseif ($design_num[$c] == 7){
                    $_7 += (int)$biddrm[$c];
                }
            }
            for($c=0;count($feasibility_num) > $c; $c++){
                if($feasibility_num[$c] == 0){
                    $_0 += (int)$bidstud[$c];
                }
                elseif ($feasibility_num[$c] == 1){
                    $_1 += (int)$bidstud[$c];
                }
                elseif ($feasibility_num[$c] == 2){
                    $_2 += (int)$bidstud[$c];
                }
                elseif ($feasibility_num[$c] == 3){
                    $_3 += (int)$bidstud[$c];
                }
                elseif ($feasibility_num[$c] == 4){
                    $_4 += (int)$bidstud[$c];
                }
                elseif ($feasibility_num[$c] == 5){
                    $_5 += (int)$bidstud[$c];
                }
                elseif ($feasibility_num[$c] == 6){
                    $_6 += (int)$bidstud[$c];
                }
                elseif ($feasibility_num[$c] == 7){
                    $_7 += (int)$bidstud[$c];
                }
            }
            for($c=0;count($pprogramme_num) > $c; $c++){
                if($pprogramme_num[$c] == 0){
                    $_0 += (int)$bidprog[$c];
                }
                elseif ($pprogramme_num[$c] == 1){
                    $_1 += (int)$bidprog[$c];
                }
                elseif ($pprogramme_num[$c] == 2){
                    $_2 += (int)$bidprog[$c];
                }
                elseif ($pprogramme_num[$c] == 3){
                    $_3 += (int)$bidprog[$c];
                }
                elseif ($pprogramme_num[$c] == 4){
                    $_4 += (int)$bidprog[$c];
                }
                elseif ($pprogramme_num[$c] == 5){
                    $_5 += (int)$bidprog[$c];
                }
                elseif ($pprogramme_num[$c] == 6){
                    $_6 += (int)$bidprog[$c];
                }
                elseif ($pprogramme_num[$c] == 7){
                    $_7 += (int)$bidprog[$c];
                }
            }
            for($c=0;count($strategic_num) > $c; $c++){
                if($strategic_num[$c] == 0){
                    $_0 += (int)$bidstrat[$c];
                }
                elseif ($strategic_num[$c] == 1){
                    $_1 += (int)$bidstrat[$c];
                }
                elseif ($strategic_num[$c] == 2){
                    $_2 += (int)$bidstrat[$c];
                }
                elseif ($strategic_num[$c] == 3){
                    $_3 += (int)$bidstrat[$c];
                }
                elseif ($strategic_num[$c] == 4){
                    $_4 += (int)$bidstrat[$c];
                }
                elseif ($strategic_num[$c] == 5){
                    $_5 += (int)$bidstrat[$c];
                }
                elseif ($strategic_num[$c] == 6){
                    $_6 += (int)$bidstrat[$c];
                }
                elseif ($strategic_num[$c] == 7){
                    $_7 += (int)$bidstrat[$c];
                }
            }
            $tenderfeeamt[] = array($_0,$_1,$_2,$_3,$_4,$_5,$_6,$_7);
            $_0_arr[] = array('label'=>$org_id->company_name,'y'=>$_0);
            $_1_arr[] = array('label'=>$org_id->company_name,'y'=>$_1);
            $_2_arr[] = array('label'=>$org_id->company_name,'y'=>$_2);
            $_3_arr[] = array('label'=>$org_id->company_name,'y'=>$_3);
            $_4_arr[] = array('label'=>$org_id->company_name,'y'=>$_4);
            $_5_arr[] = array('label'=>$org_id->company_name,'y'=>$_5);
            $_6_arr[] = array('label'=>$org_id->company_name,'y'=>$_6);
            $_7_arr[] = array('label'=>$org_id->company_name,'y'=>$_7);
            $_0 = 0;
            $_1 = 0;
            $_2 = 0;
            $_3 = 0;
            $_4 = 0;
            $_5 = 0;
            $_6 = 0;
            $_7 = 0;
            $Insurances[] = array('label'=>$org_id->company_name,'y'=>0);
            $Bonds[] = array('label'=>$org_id->company_name,'y'=>0);
            $Parties[] = array('label'=>$org_id->company_name,'y'=>0);
            $Liability[] = array('label'=>$org_id->company_name,'y'=>0);
            $Net[] = array('label'=>$org_id->company_name,'y'=>0);
        }
        $cumave = 0;
        $tenderfeeamts = [];
        for($c=0;count($tenderfeeamt[0]) > $c; $c++){
            array_push($tenderfeeamts,$c);
            $avetot = 0;
            foreach($tenderfeeamt as $k){
                $totalfees = $k[0];
                array_push($tenderfeeamts,$k[$c]);
                $avetot += $k[$c];
                for($cx=1;$c >= $cx; $cx++){
                    $totalfees += $k[$cx];
                }
                array_push($tenderfeeamts,$totalfees);
            }
            $cumave += $avetot/count($tenderfeeamt);
            if($c==0){
                $_0_arr[] = array('label'=>'Average','y'=>$avetot/count($tenderfeeamt));
            }
            elseif($c==1){
                $_1_arr[] = array('label'=>'Average','y'=>$avetot/count($tenderfeeamt));
            }
            elseif($c==2){
                $_2_arr[] = array('label'=>'Average','y'=>$avetot/count($tenderfeeamt));
            }
            elseif($c==3){
                $_3_arr[] = array('label'=>'Average','y'=>$avetot/count($tenderfeeamt));
            }
            elseif($c==4){
                $_4_arr[] = array('label'=>'Average','y'=>$avetot/count($tenderfeeamt));
            }
            elseif($c==5){
                $_5_arr[] = array('label'=>'Average','y'=>$avetot/count($tenderfeeamt));
            }
            elseif($c==6){
                $_6_arr[] = array('label'=>'Average','y'=>$avetot/count($tenderfeeamt));
            }
            elseif($c==7){
                $_7_arr[] = array('label'=>'Average','y'=>$avetot/count($tenderfeeamt));
            }
            array_push($tenderfeeamts,$avetot/count($tenderfeeamt));
            array_push($tenderfeeamts,$cumave);
            $tenderfeeamtss[] = $tenderfeeamts;
            $tenderfeeamts = [];
        }
        // dd($tenderfeeamtss);
    	return view('test')->with([
    		'proj_info'=>$project_info,
    		'tend_info'=>$tend_info,
    		'activity'=>$activitysort,
            'data'=>$arr,
            'quali'=>$quali,
            'quanti'=>$quanti,
            'evalwei'=>$evalwei,
            'risk'=>$risk,
            'qualitative'=>$qualitative,
            'quantitative'=>$quantitative,
            'orgmatrixnom'=>$orgmatrixnom,
            'orgmatrixwei'=>$orgmatrixwei,
            'matrixallwei'=>$matrixallwei,
            'qualmatrix'=>$qualmatrix,
            'nomscore'=>$nomscore,
            'weiscores'=>$weiscores,
            'indnomscore'=>$indnomscore,
            'quantsum'=>$quantsum,
            'tenderfeeamtss'=>$tenderfeeamtss,
            '_0_arr' => $_0_arr,
            '_1_arr' => $_1_arr,
            '_2_arr' => $_2_arr,
            '_3_arr' => $_3_arr,
            '_4_arr' => $_4_arr,
            '_5_arr' => $_5_arr,
            '_6_arr' => $_6_arr,
            '_7_arr' => $_7_arr,
            'Insurances'=>$Insurances,
            'Bonds'=>$Bonds,
            'Parties'=>$Parties,
            'Liability'=>$Liability,
            'Net'=>$Net
    	]);
        // echo count($tenderfeeamt[0]);
    }

    public function getuse($id,$use){
        $usetype = [];
        foreach ($use as $k) {
            $uset = DB::table('organisation_project_use_tbl')->where('op_id',$id)->where('service',$k)->first();
            if(!is_null($uset)){
                $usetype[] = array('area'=>$uset->area);
            }
            else{
                $usetype[] = array('area'=>0);
            }
        }
        return $usetype;
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

    public function getquanti($uid,$tid){
        $quant = DB::table('bid_deliverables_tbl')
                    ->where('tender_id',$tid)
                    ->where('user_id',$uid)
                    ->first();
        $strat = explode(",",$quant->strategic);
        $tstrat = 0;
        foreach ($strat as $key) {
            $tstrat += (int)$key;
        }
        $prog = explode(",",$quant->programme);
        $tprog = 0;
        foreach ($prog as $key) {
            $tstrat += (int)$key;
        }
        $study = explode(",",$quant->study);
        $tstudy = 0;
        foreach ($study as $key) {
            $tstrat += (int)$key;
        }
        $drm = explode(",",$quant->drm);
        $tdrm = 0;
        foreach ($drm as $key) {
            $tstrat += (int)$key;
        }
        $info_report = explode(",",$quant->info_report);
        $tinfo_report = 0;
        foreach ($info_report as $key) {
            $tstrat += (int)$key;
        }
        $info_exchange = explode(",",$quant->info_exchange);
        $tinfo_exchange = 0;
        foreach ($info_exchange as $key) {
            $tstrat += (int)$key;
        }
        $proj_brief = explode(",",$quant->proj_brief);
        $tproj_brief = 0;
        foreach ($proj_brief as $key) {
            $tstrat += (int)$key;
        }
        $risk = explode(",",$quant->risk);
        $trisk = 0;
        foreach ($risk as $key) {
            $tstrat += (int)$key;
        }
        $handover = explode(",",$quant->handover);
        $thandover = 0;
        foreach ($handover as $key) {
            $tstrat += (int)$key;
        }
        $proj_exec = explode(",",$quant->proj_exec);
        $tproj_exec = 0;
        foreach ($proj_exec as $key) {
            $tstrat += (int)$key;
        }
        $design_proposal = explode(",",$quant->design_proposal);
        $tdesign_proposal = 0;
        foreach ($design_proposal as $key) {
            $tstrat += (int)$key;
        }

        return $tstrat;
    }


    public function getorgprojectexp($org_id,$proj_id,$tid){
        $project = DB::table('project_information_tbl')
                    ->where('project_record_id', $proj_id)
                    ->first();
                    
        $orgproj = DB::table('organisation_project_tbl')
                ->where('org_id',$org_id)->get();

        $projectuse = DB::table('type_of_use_tbl')
                    ->where('project_record_id', $proj_id)
                    ->first();

        $tenderer = DB::table('tender_tbl')
                    ->where('tender_id',$tid)
                    ->first();

        $use = explode(",",$projectuse->use_name);
        $arr = explode(",",$project->type_of_development);
        $usearea = explode(",",$projectuse->use_area);

        $dept = DB::table('organisation_department_tbl')->where('org_id',$org_id)->get();
        $awards = DB::table('organisation_awards_tbl')->where('org_id',$org_id)->get();
        $accreditation = DB::table('organisation_accreditation_tbl')->where('org_id',$org_id)->get();

        $evaluation = DB::table('tender_evaluation_tbl')->where('tender_id',$tid)->first();

        $orgallproj = [];

        foreach ($orgproj as $v) {
            $orgallproj[] = array(
                'p_name' => $v->project_title,
                'p_valu' => $v->project_value,
                'type' => $this->getuse($v->op_id,$use),
                'dev_type' => explode(",", $v->type_of_development),
                'until' => $v->_until
            );
        }

    
        $avesuses = 0;
        $areasuses = 0;
        $value = 0;
        $type = 0;
        $yeard = 0;
        $aver = 0;
        
        $totaldrn = 0;
        $totalk = 0;
        foreach ($usearea as $k) {
            $totalk += $k;
        }
        if(in_array("Demolition",$arr)){
            $totaldrn += 1;
        }
        if(in_array("Refurbishment",$arr)){
            $totaldrn += 1;
        }
        if(in_array("New Built",$arr)){
            $totaldrn += 1;
        }

        foreach ($orgallproj as $element) {
            $val = round((($element['p_valu'] - $project->construction_value)/$project->construction_value)*100)/100;
            $_1=0;
            $_2=0;
            $_3=0;
            $_4=0;
            $total=0;

            foreach ($element['type'] as $elements){
                if($elements['area'] > 0)
                    $total += 1;
                else
                    $total += 0;
            }

            $tots = ($total/count($arr))*5;
            $avesuses += $tots ;

            $counter = 0;
            $areause = 0;
            $average = 0;

            foreach ($element['type'] as $elements){
                $tot = round(($elements['area']-$usearea[$counter])/$usearea[$counter]);
                if ($tot > 5)
                    $areause = 0;
                elseif ($tot > 0) 
                    $areause = abs(round(5 - $tot,1)) ;
                elseif ($tot == 0) 
                    $areause = 5;
                else
                    $areause = abs(round(5 + ($tot*5),1)) ;
                    
                $average += round(($areause/$totalk)*$usearea[$counter],1);
                
                $counter++;
            }
            
            $areasuses += $average;
            $_1 = $average;
            
            if ($val > 5){
                $value += 0;
                $_2 = 0;
            }
            elseif ($val > 0){
                $value += abs(round(5 - $val,1));
                $_2 = abs(round(5 - $val,1));
            }
            elseif ($val == 0){
                $value += 5;
                $_2 = 5;
            }
            else{
                $value += abs(round(5 + ($val*5),1));
                $_2 = abs(round(5 + ($val*5),1));
            }

            $totolorgdrn = 0;

            if(in_array("Demolition",$element['dev_type']) && in_array("Demolition",$arr)){
                $totolorgdrn +=1;
            }
            
            if(in_array("Refurbishment",$element['dev_type']) && in_array("Refurbishment",$arr)){
                $totolorgdrn +=1;
            }
                
            if(in_array("New built",$element['dev_type']) && in_array("New Built",$arr)){
                $totolorgdrn +=1;
            }
                

            $type += ($totaldrn/$totolorgdrn)*5;
            $_3 = ($totaldrn/$totolorgdrn)*5;
            $x = strtotime($tenderer->end)-strtotime($element['until']);
            $yeardiff = round(($x/ (60 * 60 * 24))/365.25,1);

            if ($yeardiff >= 10){
                $_4 = 0;
            }
            else{
                $yeard += round((10-$yeardiff)/2,1);
                $_4 = round((10-$yeardiff)/2,1);
            }

            $aver += round(($tots+$_1+$_2+$_3+$_4)/5,1);

        }

        $averating = 0;
        $numofrating = 0;
        foreach ($awards as $element){
            $ago = date("Y",strtotime($tenderer->end))-$element->award_year;
            if ($ago >= 10){
                $averating += 0;
            }
            else{
                $averating += (10-$ago)/2;
            }
        }

        if(count($awards)>5){
            $numofrating = 5;
        }
        else{
            $numofrating = count($awards);
        }
        if(count($accreditation)>10){
            $accre = 5;
        }
        else{
            $accre = count($accreditation)/2;
        }
        if(count($orgallproj)>5){
            $rele = 5;
        }
        else{
            $rele = count($orgallproj);
        }

        $projex = round(((round(($aver+round($aver/count($orgallproj),1)+count($orgallproj))/(count($orgallproj)+2),1))*$evaluation->organisation_project_exp)/100,1);
        $vos = round(((count($dept)/2)*$evaluation->organisation_variety_of_services)/100,1);
        $awa = round(((round((($averating/count($awards))+$numofrating)/2,1))*$evaluation->organisation_awards)/100,1);
        $acc = round(($accre*$evaluation->organisation_accreditations)/100,1);
        $rel = round(($rele*$evaluation->orgranisation_relationship)/100,1);

        $totalorg = $projex+$vos+$awa+$acc+$rel;

        $score = round(((($totalorg*$evaluation->organisation)/100)*$evaluation->qualitative)/100,1);

        return $score;
    }

    public function repgetorgprojectexp($org_id,$proj_id,$tid){
        $project = DB::table('project_information_tbl')
                    ->where('project_record_id', $proj_id)
                    ->first();
                    
        $orgproj = DB::table('organisation_project_tbl')
                ->where('org_id',$org_id)->get();

        $orgname = DB::table('organisation_tbl')->where('org_id',$org_id)->pluck('company_name')->first();

        $projectuse = DB::table('type_of_use_tbl')
                    ->where('project_record_id', $proj_id)
                    ->first();

        $tenderer = DB::table('tender_tbl')
                    ->where('tender_id',$tid)
                    ->first();

        $use = explode(",",$projectuse->use_name);
        $arr = explode(",",$project->type_of_development);
        $usearea = explode(",",$projectuse->use_area);

        $dept = DB::table('organisation_department_tbl')->where('org_id',$org_id)->get();
        $awards = DB::table('organisation_awards_tbl')->where('org_id',$org_id)->get();
        $accreditation = DB::table('organisation_accreditation_tbl')->where('org_id',$org_id)->get();

        $evaluation = DB::table('tender_evaluation_tbl')->where('tender_id',$tid)->first();

        $orgallproj = [];

        foreach ($orgproj as $v) {
            $orgallproj[] = array(
                'p_name' => $v->project_title,
                'p_valu' => $v->project_value,
                'type' => $this->getuse($v->op_id,$use),
                'dev_type' => explode(",", $v->type_of_development),
                'until' => $v->_until
            );
        }

    
        $avesuses = 0;
        $areasuses = 0;
        $value = 0;
        $type = 0;
        $yeard = 0;
        $aver = 0;
        
        $totaldrn = 0;
        $totalk = 0;
        foreach ($usearea as $k) {
            $totalk += $k;
        }
        if(in_array("Demolition",$arr)){
            $totaldrn += 1;
        }
        if(in_array("Refurbishment",$arr)){
            $totaldrn += 1;
        }
        if(in_array("New Built",$arr)){
            $totaldrn += 1;
        }

        foreach ($orgallproj as $element) {
            $val = round((($element['p_valu'] - $project->construction_value)/$project->construction_value)*100)/100;
            $_1=0;
            $_2=0;
            $_3=0;
            $_4=0;
            $total=0;

            foreach ($element['type'] as $elements){
                if($elements['area'] > 0)
                    $total += 1;
                else
                    $total += 0;
            }

            $tots = ($total/count($arr))*5;
            $avesuses += $tots ;

            $counter = 0;
            $areause = 0;
            $average = 0;

            foreach ($element['type'] as $elements){
                $tot = round(($elements['area']-$usearea[$counter])/$usearea[$counter]);
                if ($tot > 5)
                    $areause = 0;
                elseif ($tot > 0) 
                    $areause = abs(round(5 - $tot,1)) ;
                elseif ($tot == 0) 
                    $areause = 5;
                else
                    $areause = abs(round(5 + ($tot*5),1)) ;
                    
                $average += round(($areause/$totalk)*$usearea[$counter],1);
                
                $counter++;
            }
            
            $areasuses += $average;
            $_1 = $average;
            
            if ($val > 5){
                $value += 0;
                $_2 = 0;
            }
            elseif ($val > 0){
                $value += abs(round(5 - $val,1));
                $_2 = abs(round(5 - $val,1));
            }
            elseif ($val == 0){
                $value += 5;
                $_2 = 5;
            }
            else{
                $value += abs(round(5 + ($val*5),1));
                $_2 = abs(round(5 + ($val*5),1));
            }

            $totolorgdrn = 0;

            if(in_array("Demolition",$element['dev_type']) && in_array("Demolition",$arr)){
                $totolorgdrn +=1;
            }
            
            if(in_array("Refurbishment",$element['dev_type']) && in_array("Refurbishment",$arr)){
                $totolorgdrn +=1;
            }
                
            if(in_array("New built",$element['dev_type']) && in_array("New Built",$arr)){
                $totolorgdrn +=1;
            }
                

            $type += ($totaldrn/$totolorgdrn)*5;
            $_3 = ($totaldrn/$totolorgdrn)*5;
            $x = strtotime($tenderer->end)-strtotime($element['until']);
            $yeardiff = round(($x/ (60 * 60 * 24))/365.25,1);

            if ($yeardiff >= 10){
                $_4 = 0;
            }
            else{
                $yeard += round((10-$yeardiff)/2,1);
                $_4 = round((10-$yeardiff)/2,1);
            }

            $aver += round(($tots+$_1+$_2+$_3+$_4)/5,1);

        }

        $averating = 0;
        $numofrating = 0;
        foreach ($awards as $element){
            $ago = date("Y",strtotime($tenderer->end))-$element->award_year;
            if ($ago >= 10){
                $averating += 0;
            }
            else{
                $averating += (10-$ago)/2;
            }
        }

        if(count($awards)>5){
            $numofrating = 5;
        }
        else{
            $numofrating = count($awards);
        }
        if(count($accreditation)>10){
            $accre = 5;
        }
        else{
            $accre = count($accreditation)/2;
        }
        if(count($orgallproj)>5){
            $rele = 5;
        }
        else{
            $rele = count($orgallproj);
        }

        $projex = round(((round(($aver+round($aver/count($orgallproj),1)+count($orgallproj))/(count($orgallproj)+2),1))*$evaluation->organisation_project_exp)/100,1);
        $vos = round(((count($dept)/2)*$evaluation->organisation_variety_of_services)/100,1);
        $awa = round(((round((($averating/count($awards))+$numofrating)/2,1))*$evaluation->organisation_awards)/100,1);
        $acc = round(($accre*$evaluation->organisation_accreditations)/100,1);
        $rel = round(($rele*$evaluation->orgranisation_relationship)/100,1);

        $totalorg = $projex+$vos+$awa+$acc+$rel;

        $score = round(((($totalorg*$evaluation->organisation)/100)*$evaluation->qualitative)/100,1);

        $eval[] = array(
            'name' => $orgname,
            'proj_ex_nom' => round(($aver+round($aver/count($orgallproj),1)+count($orgallproj))/(count($orgallproj)+2),1),
            'proj_ex_wei' => $projex,
            'vos_nom' => count($dept)/2,
            'vos_wei' => $vos,
            'awards_nom' => round((($averating/count($awards))+$numofrating)/2,1),
            'awards_wei' => $awa,
            'accre_nom' => $accre,
            'accre_wei' => $acc,
            'rel_nom' => $rele,
            'rel_wei' => $rel
        );

        return $eval;
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReportsController extends Controller
{
    public function generate($pid, $tid, $uid){

    	$project = DB::table('project_information_tbl')
    				->where('project_record_id', $pid)
    				->first();

    	$projectuse = DB::table('type_of_use_tbl')
    				->where('project_record_id', $project->project_record_id)
    				->first();

    	$tenderer = DB::table('tender_tbl')
    				->where('tender_id',$tid)
    				->first();

    	$use = explode(",",$projectuse->use_name);
    	$usearea = explode(",",$projectuse->use_area);
    	$arr = explode(",",$project->type_of_development);

    	$org = DB::table('organisation_tbl')
    			->where('user_id',$uid)->first();

    	$orgproj = DB::table('organisation_project_tbl')
    			->where('org_id',$org->org_id)->get();

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

    	$dept = DB::table('organisation_department_tbl')->where('org_id',$org->org_id)->get();
    	$awards = DB::table('organisation_awards_tbl')->where('org_id',$org->org_id)->get();
    	$accreditation = DB::table('organisation_accreditation_tbl')->where('org_id',$org->org_id)->get();

    	$evaluation = DB::table('tender_evaluation_tbl')->where('tender_id',$tid)->first();

    	
    	
    	// echo $project->type_of_development;
    	// echo 	"<table>
    	// 			<thead>
    	// 				<tr>
    	// 					<th>Project name</th>
    	// 					<th>Project Value</th>
    	// 					";
    	// 					foreach ($use as $k) {
    	// 						echo "<th>".$k."</th>";
    	// 					}
    	// echo "				<th>Demolition</th>
    	// 					<th>Refurbishment</th>
    	// 					<th>New-built</th>
    	// 				</tr>
    	// 			<thead>
    	// 			<tbody>
    	// 				<tr>
    	// 					<td>".$project->project_title."</td>
    	// 					<td>".$project->construction_value."</td>";
    						// foreach ($usearea as $k) {
    						// 	echo "<td>".$k."</td>";
    						// }
    						// if(in_array("Demolition",$arr))
    						// 	echo"<td>1</td>";
    						// else
    						// 	echo "<td>0</td>";
    						// if(in_array("Refurbishment",$arr))
    						// 	echo"<td>1</td>";
    						// else
    						// 	echo "<td>0</td>";
    						// if(in_array("New Built",$arr))
    						// 	echo"<td>1</td>";
    						// else
    						// 	echo "<td>0</td>";
    						// echo "<td>".date("m/d/Y",strtotime($tenderer->end))."</td>";

    	// echo "				
    	// 				</tr>
    	// 			</tbody>
    	// 	  	</table>";

    	// echo "<h3>Tenderer</h3>";

    	// echo 	"<table>
    	// 			<thead>
    	// 				<tr>
    	// 					<th>Project name</th>
    	// 					<th>Project Value</th>
    	// 					";
    	// 					foreach ($use as $k) {
    	// 						echo "<th>".$k."</th>";
    	// 					}
    	// echo "				<th>Demolition</th>
    	// 					<th>Refurbishment</th>
    	// 					<th>New-built</th>
    	// 				</tr>
    	// 			<thead>
    	// 			<tbody>";
    	// 				foreach ($orgproj as $key ) {
    	// 					$arr = explode(",",$key->type_of_development);
    	// 					echo "<tr>";
    	// 						echo "<td>".$key->project_title."</td>";
    	// 						echo "<td>".$key->project_value."</td>";
    	// 						foreach ($use as $k) {
    	// 							$getprojuse = DB::table('organisation_project_use_tbl')->where('op_id',$key->op_id)->where('service',$k)->get();
    	// 							foreach ($getprojuse as $k) {
    	// 								if(count($k) > 0)
    	// 									echo "<td>".$k->area."</td>";
    	// 								else
    	// 									echo "<td>0</td>";
    	// 							}
    	// 							if(count($getprojuse) == 0){
					// 					echo "<td>-</td>";
					// 				}

    	// 						}

    	// 						if(in_array("Demolition",$arr))
    	// 							echo"<td>1</td>";
    	// 						else
    	// 							echo "<td>0</td>";
    	// 						if(in_array("Refurbishment",$arr))
    	// 							echo"<td>1</td>";
    	// 						else
    	// 							echo "<td>0</td>";
    	// 						if(in_array("New built",$arr))
    	// 							echo"<td>1</td>";
    	// 						else
    	// 							echo "<td>0</td>";
					// 			// $getprojuse = DB::table('organisation_project_use_tbl')->where('op_id',$key->op_id)->where('service',"Commercial")->get();
					// 			// foreach ($getprojuse as $k) {
					// 			// 	if(count($k) > 0)
					// 			// 		echo "<td>".$k->area."</td>";
					// 			// 	else
					// 			// 		echo "<td>0</td>";
					// 			// }
					// 			// $getprojuses = DB::table('organisation_project_use_tbl')->where('op_id',$key->op_id)->where('service',"Aviation")->get();
					// 			// foreach ($getprojuses as $k) {
					// 			// 	if(count($k) > 0)
					// 			// 		echo "<td>".$k->area."</td>";
					// 			// 	else
					// 			// 		echo "<td>0</td>";
					// 			// }
    	// 					echo "</tr>";
    	// 				}
    	// echo "			</tbody>
    	// 	  	</table>";
    	// echo $project->project_title;
    	return view('report')->with([
    		'use' => $use,
    		'project' => $project,
    		'usearea' => $usearea,
    		'arr' => $arr,
    		'tenderer' => $tenderer,
    		'orgallproj' => $orgallproj,
    		'dept' => $dept,
    		'awards' => $awards,
    		'accreditation' => $accreditation,
    		'evaluation' => $evaluation
    	]);

    	// var_dump($projectuse);
    }

    public function gettenderqueries(Request $request){
        $bidreq = DB::table('tender_queries_tbl')->where('tender_id',$request->get('id'))->get();

        return $bidreq;
    }

    public function publishresponse(Request $request){
        DB::table('tender_queries_tbl')->where('tender_query_id',$request->get('id'))
        ->update(
            ['response'=>$request->get('response')]
        );

        return 'Success';
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

    public function gettenderbid(Request $request){
        $tenderrec = DB::table('bid_records_tbl')->where('tender_id',$request->get('id'))->get();
    	$tendername = DB::table('tender_tbl')->where('tender_id',$request->get('id'))->pluck('services')->first();


    	foreach ($tenderrec as $key) {
    		// echo $key->user_id;
    		$comp_name = DB::table('user_accounts_models')->where('id',$key->user_id)->pluck('company')->first();
    		$org = DB::table('organisation_tbl')->where('user_id',$key->user_id)->pluck('org_id')->first();
    	 	$tendinfo[] = array(
    	 		'comp_name' => $comp_name,
                'tid' => $request->get('id'),
                'uid' => $key->user_id,
    	 		'qualitative' => $this->getorgprojectexp($org,$key->project_record_id,$key->tender_id),
    	 		'quantitative' => $this->getquanti($key->user_id,$key->tender_id),
                'projname' => DB::table('project_information_tbl')->where('project_record_id',$key->project_record_id)->pluck('project_title')->first(),
                'tendservice' => $tendername
    	 	);
    	}

    	return $tendinfo;
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

    public function awardtender(Request $request){
        // echo $request->get('tid');
        // echo $request->get('uid');

        DB::table('successful_tender')->insert(['tender_id'=> $request->get('tid'),'user_id' => $request->get('uid')]);
        DB::table('submitted_tenders_tbl')->where('tender_id',$request->get('tid'))->delete();

        DB::table('tender_tbl')->where('tender_id',$request->get('tid'))->update(
            [
                'status' => 'Closed'
            ]
        );

        return 'success';
    }
}

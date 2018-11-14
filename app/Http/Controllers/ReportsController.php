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

    	foreach ($tenderrec as $key) {
    		// echo $key->user_id;
    		$comp_name = DB::table('user_accounts_models')->where('id',$key->user_id)->pluck('company')->first();
    		$org = DB::table('organisation_tbl')->where('user_id',$key->user_id)->pluck('org_id')->first();
    	 	$tendinfo[] = array(
    	 		'comp_name' => $comp_name,
    	 		'qualitative' => $this->getorgprojectexp($org,$key->project_record_id)
    	 	);
    	}

    	return $tendinfo;
    }

    public function getorgprojectexp($org_id,$proj_id){
    	$project = DB::table('project_information_tbl')
    				->where('project_record_id', $proj_id)
    				->first();
    				
    	$orgproj = DB::table('organisation_project_tbl')
    			->where('org_id',$org_id)->get();

    	$projectuse = DB::table('type_of_use_tbl')
    				->where('project_record_id', $proj_id)
    				->first();

    	$use = explode(",",$projectuse->use_name);

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
    	
    	foreach ($orgallproj as $element) {
    		$val = round((($element['p_valu'] - $project->construction_value)/$project->construction_value)*100)/100;
			$_1=0;
			$_2=0;
			$_3=0;
			$_4=0;
    	}

    	return $orgallproj;
    }
}

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.table td {
			border: 1px solid black;
		}
		.table td {
			width: 150px;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Project name</th>
				<th>Project Value</th>
				@foreach ($use as $k)
    				<th>{{ $k }}</th>
    			@endforeach
    			<th>Demolition</th>
 				<th>Refurbishment</th>
 				<th>New-built</th>
 				<th>Until</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{ $project->project_title }}</td>
				<td>{{ $project->construction_value }}</td>
				@php
					$totaldrn = 0;
					$totalk = 0;
					foreach ($usearea as $k) {
						echo "<td>".$k."</td>";
						$totalk += $k;
					}
					if(in_array("Demolition",$arr)){
						echo"<td>1</td>";
						$totaldrn += 1;
					}
					else
						echo "<td>0</td>";
					if(in_array("Refurbishment",$arr)){
						echo"<td>1</td>";
						$totaldrn += 1;
					}
					else
						echo "<td>0</td>";
					if(in_array("New Built",$arr)){
						echo"<td>1</td>";
						$totaldrn += 1;
					}
					else
						echo "<td>0</td>";
					echo "<td>".date("m/d/Y",strtotime($tenderer->end))."</td>";
				@endphp
			</tr>
		</tbody>
	</table>

	<h3>Tenderer organisation</h3>

	<table class="table" style="border:1px solid black;">
		<thead >
			<tr>
				<th>Project name</th>
				<th>Value</th>
				@php
					foreach ($use as $k) {
						echo "<th>".$k."</th>";
					}
				@endphp
				<th>Demolition</th>
				<th>Refurbishment</th>
				<th>New-built</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($orgallproj as $element)
				<tr>
					<td>{{$element['p_name']}}</td>
					<td>{{$element['p_valu']}}</td>
					
					@foreach ($element['type'] as $elements)
						<td>{{ $elements['area'] }}</td>
					@endforeach
					@if(in_array("Demolition",$element['dev_type']))<td>1</td>@else<td>0</td>@endif
					@if(in_array("Refurbishment",$element['dev_type']))<td>1</td>@else<td>0</td>@endif
					@if(in_array("New built",$element['dev_type']))<td>1</td>@else<td>0</td>@endif
					<td>{{ $element['until'] }}</td>
				</tr>	
			@endforeach
		</tbody>
	</table>


	<h3>step 1</h3>

	<table class="table" style="border:1px solid black;">
		<thead >
			<tr>
				<th>Project name</th>
				<th>Value</th>
				@php
					foreach ($use as $k) {
						echo "<th>Same uses</th>";
					}
				@endphp
				<th>type</th>
				<th>type</th>
				<th>New-type</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($orgallproj as $element)
				<tr>
					<td>{{$element['p_name']}}</td>
					<td>{{ round((($element['p_valu'] - $project->construction_value)/$project->construction_value)*100) }}%</td>
					
					@foreach ($element['type'] as $elements)
						@if ($elements['area'] == 0)
							<td>0</td>
						@else
							<td>1</td>
						@endif
					@endforeach
					@if(in_array("Demolition",$element['dev_type']) && in_array("Demolition",$arr))<td>1</td>@else<td>0</td>@endif
					@if(in_array("Refurbishment",$element['dev_type']) && in_array("Refurbishment",$arr))<td>1</td>@else<td>0</td>@endif
					@if(in_array("New built",$element['dev_type']) && in_array("New Built",$arr))<td>1</td>@else<td>0</td>@endif
				</tr>	
			@endforeach
		</tbody>
	</table>

	<h3>step 2</h3>

	<table class="table" style="border:1px solid black;">
		<thead >
			<tr>
				<th>Project name</th>
				<th>Value</th>
				@php
					foreach ($use as $k) {
						echo "<th>Same uses</th>";
					}
				@endphp
				<th>type</th>
				<th>type</th>
				<th>New-type</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($orgallproj as $element)
				@php
					$val = round((($element['p_valu'] - $project->construction_value)/$project->construction_value)*100)/100;
				@endphp
				<tr>
					<td>{{$element['p_name']}}</td>
					<td>
						@if ($val > 5)
							0
						@elseif ($val > 0) 
							{{ abs(round(5 - $val,1)) }}
						@elseif ($val == 0) 
							5
						@else
							{{ abs(round(5 + ($val*5),1)) }}
						@endif
					</td>
					@php
						$total = 0;
					@endphp
					@foreach ($element['type'] as $elements)
						@if($elements['area'] > 0)
							@php
								$total += 1 
							@endphp
						@else
							@php
								$total += 0
							@endphp
						@endif
						{{-- {{ $total += $elements['area'] }} --}}
					@endforeach
					<td>{{$total/count($arr)}}</td>
					<td>{{($total/count($arr))*5 }}</td>
					@php
						$totolorgdrn = 0;
					@endphp
					@if(in_array("Demolition",$element['dev_type']) && in_array("Demolition",$arr))@php
						$totolorgdrn +=1
					@endphp
					@endif
					@if(in_array("Refurbishment",$element['dev_type']) && in_array("Refurbishment",$arr))
						@php
							$totolorgdrn +=1
						@endphp
					@endif
					@if(in_array("New built",$element['dev_type']) && in_array("New Built",$arr))
						@php
							$totolorgdrn +=1
						@endphp
					@endif
					<td>{{$totaldrn/$totolorgdrn}}</td>
					<td></td>
					<td>{{($totaldrn/$totolorgdrn)*5}}</td>
					<td></td>
				</tr>	
			@endforeach
		</tbody>
	</table>

	<h3>Deviation</h3>

	<table class="table" style="border:1px solid black;">
		<thead >
			<tr>
				<th>Project name</th>
				<th>Deviation</th>
				<th> 	</th>
				<th>Area of uses</th>
				<th>Area of uses</th>
				<th>Area of uses</th>
				<th>Area of uses</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($orgallproj as $element)
				@php
					$val = round((($element['p_valu'] - $project->construction_value)/$project->construction_value)*100)/100;
				@endphp
				<tr>
					<td>{{$element['p_name']}}</td>
					<td></td>
					<td></td>
					<?php $counter = 0;?>
					@foreach ($element['type'] as $elements)
						<td>{{ round(($elements['area']-$usearea[$counter])/$usearea[$counter])*100 }}%</td>
						<?php $counter++; ?>
					@endforeach
					<td></td>
					<td></td>
					
				</tr>	
			@endforeach
		</tbody>
	</table>

	<h3>Rating</h3>

	<table class="table" style="border:1px solid black;">
		<thead >
			<tr>
				<th>Project name</th>
				<th>Rating</th>
				<th> 	</th>
				<th>Area of uses</th>
				<th>Area of uses</th>
				<th>Area of uses</th>
				<th>Area of uses</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($orgallproj as $element)
				@php
					$val = round((($element['p_valu'] - $project->construction_value)/$project->construction_value)*100)/100;
				@endphp
				<tr>
					<td>{{$element['p_name']}}</td>
					<td></td>
					<td></td>
					<?php $counter = 0;?>
					@foreach ($element['type'] as $elements)
						@php
							$tot = round(($elements['area']-$usearea[$counter])/$usearea[$counter]);
						@endphp
						<td>
							@if ($tot > 5)
								0
							@elseif ($tot > 0) 
								{{ abs(round(5 - $tot,1)) }}
							@elseif ($tot == 0) 
								5
							@else
								{{ abs(round(5 + ($tot*5),1)) }}
							@endif
						</td>
						<?php $counter++; ?>
					@endforeach
					<td></td>
					<td></td>
					
				</tr>	
			@endforeach
		</tbody>
	</table>

	<h3>Weighted Rating</h3>

	<table class="table" style="border:1px solid black;">
		<thead >
			<tr>
				<th>Project name</th>
				<th>Weighted Rating</th>
				<th> 	</th>	
				<th>Area of uses</th>
				<th>Area of uses</th>
				<th>Area of uses</th>
				<th>Area of uses</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($orgallproj as $element)
				@php
					$val = round((($element['p_valu'] - $project->construction_value)/$project->construction_value)*100)/100;
				@endphp
				<tr>
					<td>{{$element['p_name']}}</td>
					<td></td>
					<td></td>
					<?php $counter = 0;
						  $areause = 0;
					?>

					@foreach ($element['type'] as $elements)
						@php
							$tot = round(($elements['area']-$usearea[$counter])/$usearea[$counter]);
						@endphp
						@if ($tot > 5)
							@php
								$areause = 0;
							@endphp
						@elseif ($tot > 0) 
							@php
								$areause = abs(round(5 - $tot,1)) ;
							@endphp
						@elseif ($tot == 0) 
							@php
								$areause = 5;
							@endphp
						@else
							@php
								$areause = abs(round(5 + ($tot*5),1)) ;
							@endphp
						@endif
						<td>
							{{ round(($areause/$totalk)*$usearea[$counter],1) }}
						</td>
						<?php $counter++; ?>
					@endforeach
					<td></td>
					<td></td>
					
				</tr>	
			@endforeach
		</tbody>
	</table>

	<h3>Averages</h3>

	<table class="table" style="border:1px solid black;">
		<thead >
			<tr>
				<th>Project name</th>
				<th>Averages</th>
				<th> 	</th>	
				<th>Area of uses</th>
				<th>Area of uses</th>
				<th>Area of uses</th>
				<th>Area of uses</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($orgallproj as $element)
				@php
					$val = round((($element['p_valu'] - $project->construction_value)/$project->construction_value)*100)/100;
				@endphp
				<tr>
					<td>{{$element['p_name']}}</td>
					<td></td>
					<td></td>
					<?php $counter = 0;
						  $areause = 0;
						  $average = 0;
					?>

					@foreach ($element['type'] as $elements)
						@php
							$tot = round(($elements['area']-$usearea[$counter])/$usearea[$counter]);
						@endphp
						@if ($tot > 5)
							@php
								$areause = 0;
							@endphp
						@elseif ($tot > 0) 
							@php
								$areause = abs(round(5 - $tot,1)) ;
							@endphp
						@elseif ($tot == 0) 
							@php
								$areause = 5;
							@endphp
						@else
							@php
								$areause = abs(round(5 + ($tot*5),1)) ;
							@endphp
						@endif
						@php
							$average += round(($areause/$totalk)*$usearea[$counter],1);
						@endphp
						
						<?php $counter++; ?>
					@endforeach
					<td>
						{{ $average }}
					</td>
					<td></td>
					<td></td>
					<td></td>
					
				</tr>	
			@endforeach
		</tbody>
	</table>

	<table class="table" style="border:1px solid black;">
		<thead >
			<tr>
				<th>Project name</th>
				<th>Same uses</th>
				<th>Area of use</th>
				<th>Value</th>
				<th>type</th>
				<th>Recent</th>
				<th>Average</th>
			</tr>
		</thead>
		<tbody>
			@php
				$avesuses = 0;
				$areasuses = 0;
				$value = 0;
				$type = 0;
				$yeard = 0;
				$aver = 0;
			@endphp
			@foreach ($orgallproj as $element)

				@php
					$val = round((($element['p_valu'] - $project->construction_value)/$project->construction_value)*100)/100;
					$_1=0;
					$_2=0;
					$_3=0;
					$_4=0;
				@endphp
				<tr>
					<td>{{$element['p_name']}}</td>
					@php
						$total = 0;
					@endphp
					@foreach ($element['type'] as $elements)
						@if($elements['area'] > 0)
							@php
								$total += 1 
							@endphp
						@else
							@php
								$total += 0
							@endphp
						@endif
						{{-- {{ $total += $elements['area'] }} --}}
					@endforeach
					{{-- <td></td> --}}
					<td>{{($total/count($arr))*5 }}</td>
					@php
						$tots = ($total/count($arr))*5;
						$avesuses += $tots ;
					@endphp
					<?php $counter = 0;
						  $areause = 0;
						  $average = 0;
					?>

					@foreach ($element['type'] as $elements)
						@php
							$tot = round(($elements['area']-$usearea[$counter])/$usearea[$counter]);
						@endphp
						@if ($tot > 5)
							@php
								$areause = 0;
							@endphp
						@elseif ($tot > 0) 
							@php
								$areause = abs(round(5 - $tot,1)) ;
							@endphp
						@elseif ($tot == 0) 
							@php
								$areause = 5;
							@endphp
						@else
							@php
								$areause = abs(round(5 + ($tot*5),1)) ;
							@endphp
						@endif
						@php
							$average += round(($areause/$totalk)*$usearea[$counter],1);
							// $_1 = round(($areause/$totalk)*$usearea[$counter],1);
						@endphp
						
						<?php $counter++; ?>
					@endforeach
					<td>
						{{ $average }}
						@php
							$areasuses += $average;
							$_1 = $average;
						@endphp
					</td>
					<td>
						@if ($val > 5)
							0
							@php
								$value += 0;
								$_2 = 0;
							@endphp
						@elseif ($val > 0) 
							{{ abs(round(5 - $val,1)) }}
							@php
								$value += abs(round(5 - $val,1));
								$_2 = abs(round(5 - $val,1));
							@endphp
						@elseif ($val == 0) 
							5
							@php
								$value += 5;
								$_2 = 5;
							@endphp
						@else
							{{ abs(round(5 + ($val*5),1)) }}
							@php
								$value += abs(round(5 + ($val*5),1));
								$_2 = abs(round(5 + ($val*5),1));
							@endphp
						@endif
					</td>
					@php
						$totolorgdrn = 0;
					@endphp
					@if(in_array("Demolition",$element['dev_type']) && in_array("Demolition",$arr))@php
						$totolorgdrn +=1
					@endphp
					@endif
					@if(in_array("Refurbishment",$element['dev_type']) && in_array("Refurbishment",$arr))
						@php
							$totolorgdrn +=1
						@endphp
					@endif
					@if(in_array("New built",$element['dev_type']) && in_array("New Built",$arr))
						@php
							$totolorgdrn +=1
						@endphp
					@endif
					<td>{{($totaldrn/$totolorgdrn)*5}}</td>
					@php
						$type += ($totaldrn/$totolorgdrn)*5;
						$_3 = ($totaldrn/$totolorgdrn)*5;
					@endphp
					@php
						$x = strtotime($tenderer->end)-strtotime($element['until']);
						$yeardiff = round(($x/ (60 * 60 * 24))/365.25,1);
					@endphp
					@if ($yeardiff >= 10)
						<td>0</td>
						@php
							$_4 = 0;
						@endphp
					@else
						<td>
							@php
								echo round((10-$yeardiff)/2,1);
								$yeard += round((10-$yeardiff)/2,1);
								$_4 = round((10-$yeardiff)/2,1);
							@endphp
						</td>
					@endif
					<td>
						@php
							echo round(($tots+$_1+$_2+$_3+$_4)/5,1);
							$aver += round(($tots+$_1+$_2+$_3+$_4)/5,1);
						@endphp
					</td>
				</tr>	
			@endforeach
			<tr>
				<td>Average</td>
				<td>
					@php
						echo round($avesuses/count($orgallproj),1);
					@endphp
				</td>
				<td>
					@php
						echo round($areasuses/count($orgallproj),1);
					@endphp
				</td>
				<td>
					@php
						echo round($value/count($orgallproj),1);
					@endphp
				</td>
				<td>
					@php
						echo round($type/count($orgallproj),1);
					@endphp
				</td>
				<td>
					@php
						echo round($yeard/count($orgallproj),1);
					@endphp
				</td>
				<td>
					@php
						echo round($aver/count($orgallproj),1);
					@endphp
				</td>
				<td>
					@php
						echo round(($aver+round($aver/count($orgallproj),1)+count($orgallproj))/(count($orgallproj)+2),1);
					@endphp
				</td>
			</tr>
		</tbody>
	</table>
	<p>Project experience: {{round(($aver+round($aver/count($orgallproj),1)+count($orgallproj))/(count($orgallproj)+2),1)}}</p>
	@if (count($dept) > 10)
		<p>Variety of service : 5</p>
		@else
			<p>Variety of service : {{count($dept)/2}}</p>
	@endif
	@php
		$averating = 0;
		$numofrating = 0;
	@endphp
	@foreach ($awards as $element)
		@php
			$ago = date("Y",strtotime($tenderer->end))-$element->award_year;
			if ($ago >= 10){
				// echo 0;
				$averating += 0;
			}
			else{
				// echo (10-$ago)/2;
				$averating += (10-$ago)/2;
			}
		@endphp
	@endforeach
	@php
		if(count($awards)>5){
			$numofrating = 5;
		}
		else{
			$numofrating = count($awards);
		}
		echo "<p>Awards :" . round((($averating/count($awards))+$numofrating)/2,1)."</p>";
		if(count($accreditation)>10){
			echo '<p>Accreditation : ' . 5 .'</p>';
			$accre = 5;
		}
		else{
			echo '<p>Accreditation : ' .count($accreditation)/2 . '</p>';
			$accre = count($accreditation)/2;
		}
		if(count($orgallproj)>5){
			echo '<p>Previous Work with Employer : ' . 5 .'</p>';
			$rele = 5;
		}
		else{
			echo '<p>Previous Work with Employer : ' .count($orgallproj) . '</p>';
			$rele = count($orgallproj);
		}
	@endphp
	@php
		$projex = round(((round(($aver+round($aver/count($orgallproj),1)+count($orgallproj))/(count($orgallproj)+2),1))*$evaluation->organisation_project_exp)/100,1);
		$vos = round(((count($dept)/2)*$evaluation->organisation_variety_of_services)/100,1);
		$awa = round(((round((($averating/count($awards))+$numofrating)/2,1))*$evaluation->organisation_awards)/100,1);
		$acc = round(($accre*$evaluation->organisation_accreditations)/100,1);
		$rel = round(($rele*$evaluation->orgranisation_relationship)/100,1);
		echo $projex."<br>";
		echo $vos."<br>";
		echo $awa."<br>";
		echo $acc."<br>";
		echo $rel."<br>";
		$totalorg = $projex+$vos+$awa+$acc+$rel;
		echo "total: " . $totalorg . "<br><br><br>";

		echo round(((($totalorg*$evaluation->organisation)/100)*$evaluation->qualitative)/100,1);


	@endphp
		
		@php
			// var_dump($evaluation);echo"<br>";
			// echo count($dept);
		@endphp
</body>
</html>
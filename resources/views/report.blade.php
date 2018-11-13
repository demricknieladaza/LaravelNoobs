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
				</tr>	
			@endforeach
		</tbody>
	</table>

	<h3>step 3</h3>

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

	<h3>step 4</h3>

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

	<h3>step 5</h3>

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
							{{ ($areause/$totalk)*$usearea[$counter] }}
						</td>
						<?php $counter++; ?>
					@endforeach
					<td></td>
					<td></td>
					
				</tr>	
			@endforeach
		</tbody>
	</table>
		
		@php
			// var_dump($orgallproj);echo"<br>";
			echo $totalk;
		@endphp
</body>
</html>
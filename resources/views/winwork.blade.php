@extends('layouts.master') 

@section('content')


<style type="text/css">
	div.textcont {
	  /*margin: 0 auto;*/
	  /*width: 75%;*/
	}

	.hidcont {
	  overflow: hidden;
	  line-height: 1em;
	  height: 14em;
	}

	.showContent {
	  line-height: 1em;
	  height: auto;
	}

	.showContent {
	  height: auto;
	}

	.show-more {
	  padding: 10px 0;
	  text-align: left;
	}
</style>
<script type="text/javascript">
	// $('#ex1').slider({
	// 	formatter: function() {
	// 		return 'Current value: ';
	// 	}
	// });

	// Without JQuery
	$(document).ready(function(){
		var slider = new Slider('#ex1', {
		tooltip:'always',
		formatter: function(value) {
			if (value == 101){
				return 'Any';
			}
			else if(value == 0 || value == 1){
				return value + ' mile';
			}
			else{
				return value + ' miles';
			}
			// return 'Current value: ';
		};

		});

		
	});
	
</script>
<script>
	$(document).ready(function()
	{
		// alert('SZDFASd');
		$('.star_save').click(function(){
			// alert($(this).attr('data-proj-id'));
			jQuery.ajax({
				url: "{{ url('move_to_saved') }}",
				type: 'post',
				data: {
					idd: $(this).attr('data-proj-id'),
					tenid: $(this).attr('data-tend-id')

				},
				success: function(result){
					console.log(result);
				}
			});
		});
		// $('.apply_filter').click(function(){
		// 	alert('NAA!');
		// 	var filter = [];
		// 	jQuery("input[name='service_filter[]']").each(function()
		// 		{	
		// 			if($(this).prop('checked')){
		// 				filter.push($(this).val());
		// 			}
					
		// 		}
		// 	);
		// 	// jQuery.ajax({
		// 	// 	url: "{{ url('filtered_results') }}",
		// 	// 	type: 'get',
		// 	// 	data: {
		// 	// 		filter: filter
		// 	// 	},
		// 	// 	success: function(result){
		// 	// 		//console.log(result);
		// 	// 	}

		// 	// })
	});
</script>
	<div class="container search_filter wow fadeInDown" data-wow-duration="1s" data-wow-delay="200ms">
		<div class="row top-row">
			<form method="post">
				<div class="col-sm-10">
					<div class="row">
						<div class="col-sm-8">
							<input type="text" name="search" class="form-control project_search" placeholder="Search Keyword">
							<i class="fa fa-search"></i>					
						</div>						
						<div class="col-sm-4">
							<select class="form-control project_sort">
								<option>Sort By</option>
								<option>Published Date (&uarr;)</option>
								<option>Published Date (&darr;)</option>
								<option>Deadline (&uarr;)</option>
								<option>Deadline (&darr;)</option>
								<option>Project Value (&uarr;)</option>
								<option>Project Value (&darr;)</option>
								<option>Alphabetical (&uarr;)</option>
								<option>Alphabetical (&darr;)</option>
							</select>
							<i class="fa fa-sort-amount-desc"></i>
						</div>
					</div>
				</div>
				<div class="col-sm-2">
					<button class="btn btn-lg btn-primary" style="border-radius: 6px;">Search</button>
				</div>
			</form>
		</div>
	</div>

	<div class="container-fluid search_results wow fadeInUp" data-wow-duration="1s" data-wow-delay="200ms">
		<div class="container">
			<div class="row">
				<div class="row">
					<div class="col-sm-3">
						<div class="more-search-filter">
							{!! Form::open(['action' => 'WinWorkController@searchFilters', 'method' => 'POST'])!!}
							{{-- <form method="post" action="{{ url('winwork/searchFilters') }}"> --}}
								<h3>Filter By</h3>
								<div class="textcont">
								<p><b>Service</b></p>
								<div class="cont hidcont">
								<?php

								$Service = array("Fire Engineer","Service Engineer","Principal Designer","Fascade Engineer","Building Control","Lighting Consulant","Security Consultant","Planning Consultant","Sustainability Consultant","BIM Consultant","Quantity Surveyor","Project Manager", "Architecture", "Acoustic Engineer"
								);
								sort($Service, SORT_NATURAL | SORT_FLAG_CASE);
								foreach ($Service as $key ) {
								    echo "<p><input type='checkbox' class='filled-in' name='service_filter[]' value='".$key."' id='".$key."'> <label for='".$key."'>".$key."</label></p>";
								}

								?>
								</div>
								<div class="show-more">
								    <a  style="color: #FE7235;">Show more</a>
								 </div><br>
								</div>
								<div class="textcont">
								<p><b>Type of Use</b></p>
								<div class="cont hidcont">
								<?php

								$Service = array("Leisure","Sports and Venue","Hotel","Industrial","Education","Healthcare","Defence","Aviation","Highways","Bridges","Rail","Water","Power","Oil,Gas and Chemical"
								);
								sort($Service, SORT_NATURAL | SORT_FLAG_CASE);
								foreach ($Service as $key ) {
								    echo "<p><input type='checkbox' class='filled-in' name='use_filter[]' value='".$key."' id='".$key."'> <label for='".$key."'>".$key."</label></p>";
								}

								?>
								<p><input type="checkbox" class="filled-in" name="other" value="other" id="other"> <label for="other">Other</label></p>
								</div>
								<div class="show-more">
								    <a  style="color: #FE7235;">Show more</a>
								 </div><br>
								 </div>
								
								<!-- <p><input type="checkbox" class="filled-in" name="architect" value="architect" id="architect"> <label for="architect">Architect</label></p>
								<p><input type="checkbox" class="filled-in" name="acoustic engineer" value="acoustic engineer" id="acoustic engineer"><label for="acoustic engineer">Acoustic Engineer</label></p>
								<p><input type="checkbox" class="filled-in" name="structural" value="structural" id="structural"> <label for="structural">Structural Engineer</label></p> -->
								<p><b>Project Value</b></p>
								<div class="row">
									<div class="form-group">

										<div class="col-sm-6">
											<input type="text" name="from" placeholder="From Value" class="form-control">
										</div>
										<div class="col-sm-6">
											<input type="text" name="to" placeholder="To Value" class="form-control">
										</div>
									</div>
								</div>
								<p></p>
								<p><b>Location</b></p>
								
								
								<!-- <p><input type="checkbox" class="filled-in" name="office" value="office" id="office"> <label for="office">Office</label></p>
								<p><input type="checkbox" class="filled-in" name="residential" value="residential" id="residential"> <label for="residential">Residential</label></p>
								<p><input type="checkbox" class="filled-in" name="retail" value="retail" id="retail"> <label for="retail">Retail</label></p> -->
								<div class="form-group">
									<input type="text" name="location" class="form-control" placeholder="Enter your location">
								</div>								
								{{-- <div class="form-group" style="padding-top: 15px;">
								 	{{-- <input id="ex8" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="101" data-slider-step="1" data-slider-value="0"/>
								 	<input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="101" data-slider-step="1" data-slider-value="0" />
								</div> --}}
								<div class="formm-group">
									<p><button type="submit" name="apply_filter" value="Apply Filter" class="btn btn-lg btn-primary" style="border-radius:6px; ">Apply Filter</button></p>
								</div>	
							{{-- </form> --}}
							{!! Form::close() !!}
						</div>
					</div>
					<div class="col-sm-9">
						<div class="col-sm-12 search_result_sort">
							<div class="row">
								<div class="col-sm-6 result_per_page">
									<select name="result_per_page">
										<option>10</option>
										<option>20</option>
									</select>
									<b>Showing 1 to 10 of 156 results</b>
								</div>
								<div class="col-sm-6">
									<ul class="pagination navbar-right">
										{{-- <li><a href="#">&laquo;</a></li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#">&raquo;</a></li> --}}
										{{ $project->render() }}
									</ul>
								</div>
							</div>
						</div>
						{{-- @for($count = 0; $count < count($type); $count++) --}}
							@foreach($project as $proj)
								{{-- @for($counter = 0; $counter < count($type[]); $counter++) --}}
								<div class="col-sm-12 search_result_row">
										<div class="search_data">
											<div class="row">
												<div class="col-sm-3 project_image">
													<img src="{{asset('images/construction.jpg')}}" width="100%">
													<input type="hidden" data-project-id="{{ $proj->project_record_id }}" class="proj_id" name="idd" value="{{ $proj->project_record_id }}"/>
													<input type="hidden" class="tend_id" name="tenid" value="{{ $proj->tender_id }}"/>
												</div>
												<div class="col-sm-9 project-excerpt">
													<div class="row">
														
														<div class="col-sm-12">
															<h3>{{ $proj->project_title }}</h3>
														</div>
																	
														<div class="col-sm-6">
															@if(count($proj->tender_count) < 0)
															<h5>{{ $proj->services }} and {{ $proj->tender_count }} Other Services</h5>
															@else
															<h5>{{ $proj->services }}</h5>
															@endif
															<p>{{ $proj->type_of_development }} located in {{ $proj->location }}</p>
															{{-- @foreach ($type as $u)
																<p>{{ $type['use_area'] }} m2 {{ $type[0]['use_name'] }}</p>
															@endforeach --}}

																{{-- <p>{{ $type[$count][$counter]->use_area }} m2 {{ $type[$count][$counter]->use_name }}</p> --}}
															{{-- @if(in_array($proj->project_record_id, $project)) --}}
															{{-- <p>{{ explode(',', $proj->use_name) }} {{ $proj->use_area }} m2</p> --}}
															<?php 
																$strr = explode(",",$proj->use_name);
																$strr1 = explode(",",$proj->use_area);
																// echo count($strr);
																$counter = 0;
																if(count($strr) <= 3){
																	$counter = 2;
																}
																else{
																	$counter = count($strr);
																}
																for($x=0;$x < $counter;$x++)
																{
																	echo ' '.$strr[$x].' '.$strr1[$x].' m2';
																}
															
															?>
																
																
														</div>
														<div class="col-sm-3 bid_section text-center">
															<p>Construction Value</p>
															<h3>{{ $proj->construction_value }}</h3>
														</div>
														<div class="col-sm-3 bid_section text-center">
															<p>Avg Bid</p>
															<h3>£ 310K</h3>
														</div>				
													</div>
												</div>							
											</div>						
										</div>
										<figcaption class="figcaption1">
											<a href="{{ url('/winwork'.'/'.$proj->project_record_id.'/'.'edit') }}" style="color: inherit;">
											<h3 style="color:white; ">{{ $proj->project_title }}</h3>
											</a>
											<p>
													@if(in_array($proj->tender_id, $saved))
														<object><a href="#" data-toggle="tooltip" title="Add to Favourites"><i style="color: white;" class="fa fa-fw fa-star"></i></a></object>
														<object><a href="#" data-toggle="tooltip" title="Send Via Email"><i class="fa fa-fw fa-envelope-o"></i></a></object>
													@else
														<object><a class="star_save" data-proj-id="{{ $proj->project_record_id }}" data-tend-id="{{ $proj->tender_id }}" id="save_project" title="Add to Favourites"><i class="fa fa-fw fa-star-o"></i></a></object>
														<object><a href="#" data-toggle="tooltip" title="Send Via Email"><i class="fa fa-fw fa-envelope-o"></i></a></object>
													@endif
													
											</p>
										</figcaption>	
									</div>
									{{-- <a class="star_save" id="save_project" title="Add to Favourites">sdasdasds<i style="color: orange;" class="fa fa-fw fa-star-o"></i></a> --}}
								{{-- @endfor --}}
							@endforeach	
						{{-- @endfor --}}

						{{-- <div class="col-sm-12 search_result_row">
							<div class="search_data">
								<div class="row">
									<div class="col-sm-3 project_image">
										<img src="{{asset('images/construction.jpg')}}" width="100%">
									</div>
									<div class="col-sm-9 project-excerpt">
										<div class="row">
											<div class="col-sm-12">
												<h3>Canada Water Masterplan<small> - 9 days left</small></h3>
											</div>			
											<div class="col-sm-6">
												<h5>Fire Engineer and 9 Other Services</h5>
												<p>New-built located in Canada Water, London<br> 33,000 m2 office space, 5,500 m2 retail space</p>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Construction Value</p>
												<h3>£ 510K</h3>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Avg Bid</p>
												<h3>£ 310K</h3>
											</div>				
										</div>
									</div>							
								</div>						
							</div>
							<figcaption class="figcaption1">
								<a href="{{ url('/winwork/pds') }}"><h3 style="color:white; ">Canada Water Masterplan</h3></a>
								<p>
									<a href="#" data-toggle="tooltip" title="Add to Favourites"><i class="fa fa-fw fa-star-o"></i></a>
									<a href="#" data-toggle="tooltip" title="Send Via Email"><i class="fa fa-fw fa-envelope-o"></i></a>
								</p>
							</figcaption>	
						</div>	
						<div class="col-sm-12 search_result_row">
							<div class="search_data">
								<div class="row">
									<div class="col-sm-3 project_image">
										<img src="{{asset('images/construction.jpg')}}" width="100%">
									</div>
									<div class="col-sm-9 project-excerpt">
										<div class="row">
											<div class="col-sm-12">
												<h3>Canada Water Masterplan<small> - 9 days left</small></h3>
											</div>			
											<div class="col-sm-6">
												<h5>Fire Engineer and 9 Other Services</h5>
												<p>New-built located in Canada Water, London<br> 33,000 m2 office space, 5,500 m2 retail space</p>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Construction Value</p>
												<h3>£ 510K</h3>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Avg Bid</p>
												<h3>£ 310K</h3>
											</div>				
										</div>
									</div>							
								</div>						
							</div>
							<figcaption class="figcaption1">
								<a href="{{ url('/winwork/pds') }}"><h3 style="color:white; ">Canada Water Masterplan</h3></a>
								<p>
									<a href="#" data-toggle="tooltip" title="Add to Favourites"><i class="fa fa-fw fa-star-o"></i></a>
									<a href="#" data-toggle="tooltip" title="Send Via Email"><i class="fa fa-fw fa-envelope-o"></i></a>
								</p>
							</figcaption>	
						</div>	
						<div class="col-sm-12 search_result_row">
							<div class="search_data">
								<div class="row">
									<div class="col-sm-3 project_image">
										<img src="{{asset('images/construction.jpg')}}" width="100%">
									</div>
									<div class="col-sm-9 project-excerpt">
										<div class="row">
											<div class="col-sm-12">
												<h3>Canada Water Masterplan<small> - 9 days left</small></h3>
											</div>			
											<div class="col-sm-6">
												<h5>Fire Engineer and 9 Other Services</h5>
												<p>New-built located in Canada Water, London<br> 33,000 m2 office space, 5,500 m2 retail space</p>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Construction Value</p>
												<h3>£ 510K</h3>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Avg Bid</p>
												<h3>£ 310K</h3>
											</div>				
										</div>
									</div>							
								</div>						
							</div>
							<figcaption class="figcaption1">
								<a href="{{ url('/winwork/pds') }}"><h3 style="color:white; ">Canada Water Masterplan</h3></a>
								<p>
									<a href="#" data-toggle="tooltip" title="Add to Favourites"><i class="fa fa-fw fa-star-o"></i></a>
									<a href="#" data-toggle="tooltip" title="Send Via Email"><i class="fa fa-fw fa-envelope-o"></i></a>
								</p>
							</figcaption>	
						</div>	
						<div class="col-sm-12 search_result_row">
							<div class="search_data">
								<div class="row">
									<div class="col-sm-3 project_image">
										<img src="{{asset('images/construction.jpg')}}" width="100%">
									</div>
									<div class="col-sm-9 project-excerpt">
										<div class="row">
											<div class="col-sm-12">
												<h3>Canada Water Masterplan<small> - 9 days left</small></h3>
											</div>			
											<div class="col-sm-6">
												<h5>Fire Engineer and 9 Other Services</h5>
												<p>New-built located in Canada Water, London<br> 33,000 m2 office space, 5,500 m2 retail space</p>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Construction Value</p>
												<h3>£ 510K</h3>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Avg Bid</p>
												<h3>£ 310K</h3>
											</div>				
										</div>
									</div>							
								</div>						
							</div>
							<figcaption class="figcaption1">
								<a href="#"><h3 style="color:white; ">Canada Water Masterplan</h3></a>
								<p>
									<a href="#" data-toggle="tooltip" title="Add to Favourites"><i class="fa fa-fw fa-star-o"></i></a>
									<a href="#" data-toggle="tooltip" title="Send Via Email"><i class="fa fa-fw fa-envelope-o"></i></a>
								</p>
							</figcaption>	
						</div>	
								<div class="col-sm-12 search_result_row">
							<div class="search_data">
								<div class="row">
									<div class="col-sm-3 project_image">
										<img src="{{asset('images/construction.jpg')}}" width="100%">
									</div>
									<div class="col-sm-9 project-excerpt">
										<div class="row">
											<div class="col-sm-12">
												<h3>Canada Water Masterplan<small> - 9 days left</small></h3>
											</div>			
											<div class="col-sm-6">
												<h5>Fire Engineer and 9 Other Services</h5>
												<p>New-built located in Canada Water, London<br> 33,000 m2 office space, 5,500 m2 retail space</p>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Construction Value</p>
												<h3>£ 510K</h3>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Avg Bid</p>
												<h3>£ 310K</h3>
											</div>				
										</div>
									</div>							
								</div>						
							</div>
							<figcaption class="figcaption1">
								<a href="#"><h3 style="color:white; ">Canada Water Masterplan</h3></a>
								<p>
									<a href="#" data-toggle="tooltip" title="Add to Favourites"><i class="fa fa-fw fa-star-o"></i></a>
									<a href="#" data-toggle="tooltip" title="Send Via Email"><i class="fa fa-fw fa-envelope-o"></i></a>
								</p>
							</figcaption>	
						</div>
								<div class="col-sm-12 search_result_row">
							<div class="search_data">
								<div class="row">
									<div class="col-sm-3 project_image">
										<img src="{{asset('images/construction.jpg')}}" width="100%">
									</div>
									<div class="col-sm-9 project-excerpt">
										<div class="row">
											<div class="col-sm-12">
												<h3>Canada Water Masterplan<small> - 9 days left</small></h3>
											</div>			
											<div class="col-sm-6">
												<h5>Fire Engineer and 9 Other Services</h5>
												<p>New-built located in Canada Water, London<br> 33,000 m2 office space, 5,500 m2 retail space</p>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Construction Value</p>
												<h3>£ 510K</h3>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Avg Bid</p>
												<h3>£ 310K</h3>
											</div>				
										</div>
									</div>							
								</div>						
							</div>
							<figcaption class="figcaption1">
								<a href="#"><h3 style="color:white; ">Canada Water Masterplan</h3></a>
								<p>
									<a href="#" data-toggle="tooltip" title="Add to Favourites"><i class="fa fa-fw fa-star-o"></i></a>
									<a href="#" data-toggle="tooltip" title="Send Via Email"><i class="fa fa-fw fa-envelope-o"></i></a>
								</p>
							</figcaption>	
						</div>
								<div class="col-sm-12 search_result_row">
							<div class="search_data">
								<div class="row">
									<div class="col-sm-3 project_image">
										<img src="{{asset('images/construction.jpg')}}" width="100%">
									</div>
									<div class="col-sm-9 project-excerpt">
										<div class="row">
											<div class="col-sm-12">
												<h3>Canada Water Masterplan<small> - 9 days left</small></h3>
											</div>			
											<div class="col-sm-6">
												<h5>Fire Engineer and 9 Other Services</h5>
												<p>New-built located in Canada Water, London<br> 33,000 m2 office space, 5,500 m2 retail space</p>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Construction Value</p>
												<h3>£ 510K</h3>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Avg Bid</p>
												<h3>£ 310K</h3>
											</div>				
										</div>
									</div>							
								</div>						
							</div>
							<figcaption class="figcaption1">
								<a href="#"><h3 style="color:white; ">Canada Water Masterplan</h3></a>
								<p>
									<a href="#" data-toggle="tooltip" title="Add to Favourites"><i class="fa fa-fw fa-star-o"></i></a>
									<a href="#" data-toggle="tooltip" title="Send Via Email"><i class="fa fa-fw fa-envelope-o"></i></a>
								</p>
							</figcaption>	
						</div>
								<div class="col-sm-12 search_result_row">
							<div class="search_data">
								<div class="row">
									<div class="col-sm-3 project_image">
										<img src="{{asset('images/construction.jpg')}}" width="100%">
									</div>
									<div class="col-sm-9 project-excerpt">
										<div class="row">
											<div class="col-sm-12">
												<h3>Canada Water Masterplan<small> - 9 days left</small></h3>
											</div>			
											<div class="col-sm-6">
												<h5>Fire Engineer and 9 Other Services</h5>
												<p>New-built located in Canada Water, London<br> 33,000 m2 office space, 5,500 m2 retail space</p>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Construction Value</p>
												<h3>£ 510K</h3>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Avg Bid</p>
												<h3>£ 310K</h3>
											</div>				
										</div>
									</div>							
								</div>						
							</div>
							<figcaption class="figcaption1">
								<a href="#"><h3 style="color:white; ">Canada Water Masterplan</h3></a>
								<p>
									<a href="#" data-toggle="tooltip" title="Add to Favourites"><i class="fa fa-fw fa-star-o"></i></a>
									<a href="#" data-toggle="tooltip" title="Send Via Email"><i class="fa fa-fw fa-envelope-o"></i></a>
								</p>
							</figcaption>	
						</div>
						<div class="col-sm-12 search_result_row">
							<div class="search_data">
								<div class="row">
									<div class="col-sm-3 project_image">
										<img src="{{asset('images/construction.jpg')}}" width="100%">
									</div>
									<div class="col-sm-9 project-excerpt">
										<div class="row">
											<div class="col-sm-12">
												<h3>Canada Water Masterplan<small> - 9 days left</small></h3>
											</div>			
											<div class="col-sm-6">
												<h5>Fire Engineer and 9 Other Services</h5>
												<p>New-built located in Canada Water, London<br> 33,000 m2 office space, 5,500 m2 retail space</p>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Construction Value</p>
												<h3>£ 510K</h3>
											</div>
											<div class="col-sm-3 bid_section text-center">
												<p>Avg Bid</p>
												<h3>£ 310K</h3>
											</div>				
										</div>
									</div>							
								</div>						
							</div>
							<figcaption class="figcaption1">
								<a href="#"><h3 style="color:white; ">Canada Water Masterplan</h3></a>
								<p>
									<a href="#" data-toggle="tooltip" title="Add to Favourites"><i class="fa fa-fw fa-star-o"></i></a>
									<a href="#" data-toggle="tooltip" title="Send Via Email"><i class="fa fa-fw fa-envelope-o"></i></a>
								</p>
							</figcaption>	
						</div>	
						<div class="col-sm-12 search_result_sort">
							<div class="row">
								<div class="col-sm-6 result_per_page">
									<select name="result_per_page">
										<option>10</option>
										<option>20</option>
									</select>
									<b>Showing 1 to 10 of 156 results</b>
								</div>
								<div class="col-sm-6">
									<ul class="pagination navbar-right">
										<li><a href="#">&laquo;</a></li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#">&raquo;</a></li>
									</ul>
								</div>
							</div>
						</div>	
					</div> --}}
				</div>
			</div>
		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	<script type="text/javascript">
		$(".show-more a").on("click", function() {
		  var $this = $(this);
		  var $content = $this.parent().prev("div.cont");
		  var linkText = $this.text().toUpperCase();

		  if (linkText === "SHOW MORE") {
		    linkText = "Show less";
		    $content.switchClass("hidcont", "showContent", 400);
		  } else {
		    linkText = "Show more";
		    $content.switchClass("showContent", "hidcont", 400);
		  };

		  $this.text(linkText);
		});
	</script>
	<script type="text/javascript">
		$("#ex8").slider({
			tooltip: 'always'
		});

		// Without JQuery
		var slider = new Slider("#ex8", {
			tooltip: 'always'
		});
		slider.on("slide", function(sliderValue) {
			if (sliderValue == 0){
				document.getElementById("ex6SliderVal").textContent = 'Any';
			}
			else{
				document.getElementById("ex6SliderVal").textContent = sliderValue;
			}
		});
	</script>
	<script type="text/javascript">
		
	</script>

	<!-- end -->

@endsection
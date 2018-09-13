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
			}else{
				return value;
			}
			// return 'Current value: ';
		}
	});
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
							<form method="post">
								<h3>Filter By</h3>
								<div class="textcont">
								<p><b>Service</b></p>
								<div class="cont hidcont">
								<?php

								$Service = array("Fire Engineer","Service Engineer","Principal Designer","Fascade Engineer","Building Control","Lighting Consulant","Security Consultant","Planning Consultant","Sustainability Consultant","BIM Consultant","Quantity Surveyor","Project Manager", "Architecture", "Acoustic Engineer"
								);
								sort($Service, SORT_NATURAL | SORT_FLAG_CASE);
								foreach ($Service as $key ) {
								    echo "<p><input type='checkbox' class='filled-in' name='".$key."' value='".$key."' id='".$key."'> <label for='".$key."'>".$key."</label></p>";
								}

								?>
								</div>
								<div class="show-more">
								    <a href="#" style="color: #FE7235;">Show more</a>
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
								    echo "<p><input type='checkbox' class='filled-in' name='".$key."' value='".$key."' id='".$key."'> <label for='".$key."'>".$key."</label></p>";
								}

								?>
								<p><input type="checkbox" class="filled-in" name="other" value="other" id="other"> <label for="other">Other</label></p>
								</div>
								<div class="show-more">
								    <a href="#" style="color: #FE7235;">Show more</a>
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
								<div class="form-group">
								 	{{-- <input id="ex8" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="101" data-slider-step="1" data-slider-value="0"/> --}}
								 	<input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="101" data-slider-step="1" data-slider-value="0" />
								</div>
								<div class="formm-group">
									<p><input type="submit" name="submit" value="Apply Filter" class="btn btn-lg btn-primary" style="border-radius:6px; "></p>
								</div>	
							</form>
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
						<div class="col-sm-12 search_result_row">
							<div class="search_data">
								<div class="row">
									<div class="col-sm-3 project_image">
										<img src="{{asset('images/construction.jpg')}}" width="100%">
									</div>
									<div class="col-sm-9 project-excerpt">
										<div class="row">
											<div class="col-sm-12">
												<h3 sty>Canada Water Masterplan<small> - 9 days left</small></h3>
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
							<figcaption>
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
							<figcaption>
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
							<figcaption>
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
								<a href="#"><h3 style="color: white;">Canada Water Masterplan</h3></a>
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
					</div>
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
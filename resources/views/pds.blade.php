@extends('layouts.master')

@section('content')
<style type="text/css">
	tr.lastitemiba:last-of-type
	{
		border-bottom: none !important;
	}
</style>
	<div id="actTinder" class="container-fluid below-header project-img-collection text-center">
		<h1>{{ $project->project_title }}</h1>
		<div class="project-image popup-gallery">
			<a href="../../../images/demo1.jpg"><img src="../../images/demo1.jpg"/></a>
		</div>
		<div class="project-image popup-gallery">
			<a href="../../../images/demo2.jpg"><img src="../../images/demo2.jpg"/></a>
		</div>
		<div class="project-image popup-gallery">
			<a href="../../../images/demo3.jpg"><img src="../../images/demo3.jpg"/></a>
		</div>
		<div class="project-image popup-gallery">
			<a href="../../images/demo4.jpg"><img src="../../images/demo4.jpg"/></a>
		</div>
	</div>	

<div class="container tender-details">
	<div class="row">
		<div class="col-sm-8">
			<div class="tender-container">
				<div class="row">
					<div class="col-sm-12 active-tenders">
						<h3 style="font-weight: 900;">Active Tenders</h3>
					</div>
					@foreach($tenders as $ten)
							<div class="col-sm-3">
								<a href="{{ url('/winwork/bid/'.$ten->tender_id.'/edit') }}">
									<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
										<div class="flipper">
											<div class="front">
												<!-- <i class="fa fa-fire-extinguisher fa-4x" style="color: #FE7235;"></i> -->
												<img src="../../images/{{ $ten->services }}.png">
												<h1 style="color: #000; font-size: 20px;">{{ $ten->services }}</h1>
												<p> {{ $ten->time_remaining }}</p>	
											</div>
											<div class="back">
												<h1>Submit Bid<br>-<br>Win Work</h1>
											</div>
										</div>
									</div>
								</a>
							</div>
					@endforeach
					{{-- <div class="col-sm-3">
						<a href="#">
						  <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
							<div class="flipper">
						      <div class="front">
						      	<i class="fa fa-fire-extinguisher fa-4x" style="color: #FE7235;"></i>
						      	<h1 style="color: #000; font-size: 20px;">Fire Engineer</h1>
						      	<p> 9 days left</p>	
						      </div>
						      <div class="back">
						      	<h1>Submit Bid<br>-<br>Win Work</h1>
						      </div>
						    </div>
						  </div>
						</a>
					</div>
					<div class="col-sm-3">
						<a href="#">
						  <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
							<div class="flipper">
						      <div class="front">
						      	<i class="fa fa-fire-extinguisher fa-4x" style="color: #FE7235;"></i>
						      	<h1 style="color: #000; font-size: 20px;">Fire Engineer</h1>
						      	<p> 9 days left</p>	
						      </div>
						      <div class="back">
						      	<h1>Submit Bid<br>-<br>Win Work</h1>
						      </div>
						    </div>
						  </div>
						</a>
					</div> --}}
				</div>				
			</div>
			<div class="tender-container">				
				<div class="row">
					<div class="col-sm-12 active-tenders">
						<h3 style="font-weight: 900;">Project Vision and Brief</h3>
						<p>No Description</p>
					</div>
				</div>				
			</div>
			<div class="row">
				<div class="col-sm-12 project-anchor">
					<a href="#">Project Details</a>
					<a href="#tender-queries">Tender Queries</a>
					<a href="#employers">Employer Details</a>
				</div>
			</div>
	
			<div class="tender-container">
				<div class="row">
					<div class="col-sm-12 active-tenders" id="cprofile">
						<h3 >Project Information</h3>
					</div>			
					<div class="col-sm-12">
						<table class="table table-striped table-hover">
							<tr>
								<td>Project Title</td>
								<td>{{ $project->project_title }}</td>
							</tr>
							<tr>
								<td>Project ID</td>
								<td>{{ $project->project_record_id }}</td>
							</tr>
							<tr>
								<td>Location</td>
								<td>{{ $project->location }}</td>
							</tr>
							<tr>
								<td colspan="2">
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9935.319359803168!2d-0.04969!3d51.49799!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3ae4946b67b18de7!2sCanada+Water!5e0!3m2!1sen!2snp!4v1525743556788" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
								</td>
							</tr>
							<tr>
								<td>Transport Links</td>
								<td>
									<table width="100%">
										<tr>
											<td>
												<p><b>Main Roads</b></p>
											</td>
											<td>
												<p>{{ $transport->main_road }}</p>
											</td>
										</tr>
										<tr>
											<td>
												<p><b>Tube Stations</b></p>
											</td>
											<td>
												<p>{{ $transport->tube_station_one }}</p>
												<p>{{ $transport->tube_station_two }}</p>
											</td>
										</tr>
										<tr>
											<td>
												<p><b>Bus Lines</b> </p>
											</td>
											<td>
												<p>{{ $transport->bus_lines }}</p>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>Area Specific Information</td>
								<td>
									<table width="100%">
										<tr>
											<td>Adjacent Uses</td>
											<td>{{ $area->adjacent_uses }}</td>
										</tr>
										<tr>
											<td>History</td>
											<td>{{ $area->history }}</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>Constraints</td>
								<td>
									@foreach($constraints as $cons)                               
									<p>{{ $cons->constraint }}</p>
									@endforeach
								</td>
							</tr>
							<tr>
								<td>Type of Development</td>
								<td>{{ $project->type_of_development }}</td>
							</tr>
							<tr>
								<td>Construction Value</td>
								<td>{{ $project->construction_value }}</td>
							</tr>
							<tr>
								<td>Types of Use</td>
								<td>
									<table width="100%">
										<?php $total = 0; ?>
										@foreach($type as $use)
										<?php 
											$total = $total + $use['area'];
										 ?>
										<tr>
    										<td>{{ $use['name'] }}</td>
    										<td>{{ number_format($use['area']) }} m2</td>
    										<td>{{ number_format($use['unit']) }} units</td>
    										<td>{{ $use['type'] }}</td>
    									</tr>
										@endforeach
										<tr style="border-bottom:none;">
    										<td>Total</td>
    										<td id="total"><?php echo number_format($total); ?> m2</td>
    										<td></td>
    										<td></td>	
    									</tr>
										{{-- <tr>
											<td>Residential</td>
											<td>10,000m2</td>
											<td>70 units</td>
											<td>Affordable</td>
										</tr>
										<tr>
											<td>Office</td>
											<td>15,000m2</td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td>Retail</td>
											<td>15,000m2</td>
											<td>5 units</td>
											<td></td>
										</tr>
										<tr>
											<td>Total</td>
											<td>57,000m2</td>
											<td></td>
											<td></td> --}}
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>Milestones</td>
								<td>
									<table width="100%">
										{{-- <tr>
											@foreach($milestones as $mile)
											<td>{{ $mile->riba_stage }}</td>
											<td>{{ $mile->date }}</td>
											@endforeach
										</tr> --}}
										@foreach($milestones as $mile)
    									<tr class="lastitemiba">
    										<td>{{ $mile['name'] }}</td>
    										<td>{{ $mile['date'] }}</td>
										</tr>
										@endforeach
										{{-- <tr>
											<td>RIBA Stage 2 Completion</td>
											<td>01/07/2019</td>
										</tr>
										<tr>
											<td>RIBA Stage 3 Completion</td>
											<td>01/10/2019</td>
										</tr>
										<tr>
											<td>RIBA Stage 4 Completion</td>
											<td>01/12/2019</td>
										</tr> --}}
									</table>
								</td>								
							</tr>
							<tr>
								<td>Meetings</td>
								<td>
									<table width="100%">
										<tr>
											<td>Design Team Meeting</td>
											<td>{{ $meetings->design_team_meeting }}</td>
										</tr>
										<tr>
											<td>Project Progress Meeting</td>
											<td>{{ $meetings->project_progress_meeting }}</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>Procurement Route</td>
								<td>Design & Build</td>
							</tr>
							<tr>
								<td>Project Team</td>
								<td>
									<table width="100%">
										@foreach($team as $t)
											<tr class="lastitemiba">
												<td>{{ $t->member_position }}</td>
												<td>{{ $t->member_name }}</td>
											</tr>
										@endforeach
									</table>
								</td>
							</tr>
							<tr>
								<td >Supporting Documents</td>
								<td>
									<p><a style="color: white;" href="{{asset('storage/site_plan/'.$project->site_plan )}}" name="download" class="btn btn-primary">{{ $project->site_plan }} <i class="fa fa-download"></i></a></p>
									<p><a style="color: white;" href="{{asset('storage/programme/'.$project->programme )}}" name="download" class="btn btn-primary">{{ $project->programme }} <i class="fa fa-download"></i></a></p>         
									<p><a style="color: white;" href="{{asset('storage/policy/'.$project->policy )}}" name="download" class="btn btn-primary">{{ $project->policy }} <i class="fa fa-download"></i></a></p>
								</td>
							</tr>
						</table>						
					</div>
				</div>
			</div>
			
			<div class="tender-container" >
				<div class="row">
					<div class="col-sm-12 active-tenders">
						<h3>Tender Queries</h3>
						<div class="row">	
							<div class="col-sm-12">				
								<table class="table table-striped table-hover" id="a">
									<tr>
										{{-- <td width="10%">#</td> --}}
										<td style="font-weight: 800;"><strong>Query</strong></td>
										<td style="font-weight: 800;"><strong>Responses</strong></td>

									</tr>
									@foreach($question as $qu)
									<tr>
										{{-- <td>1</td> --}}
										<td>{{ $qu->question }}</td>
										<td>{{ $qu->response }}</td>
									</tr>
									@endforeach
									{{-- <tr>
										<td>2</td>
										<td>TextTextTextTextTextTextTextTextText</td>
										<td>TextTextTextTextTextTextTextTextTextTextTextText</td>
									</tr>
									<tr>
										<td>3</td>
										<td>TextTextTextTextTextTextTextTextText</td>
										<td>TextTextTextTextTextTextTextTextTextTextTextText</td>
									</tr> --}}
								</table>
							</div>
						</div>
						<div class="col-sm-6">
							
						</div>
						<div class="col-sm-6"  style="padding: 15px;border: 1px solid #fe7235;border-radius: 6px;">
							<div id="employers"  class="toactive pull-right">
								To submit a tender query, please scroll up to <a href="#actTinder" style="color:#fe7235; text-decoration: none;">Active Tenders</a> and choose one of the services to submit a bid.
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tender-container" >
				<div class="row">
					<div class="col-sm-12 active-tenders">
						<h3 >Employer Details</h3>
						<div class="row">	
							<div class="col-sm-9">				
								<table class="table table-striped table-hover">
									<tr>
										<td>Employer</td>
										<td>British Land</td>
									</tr>
									<tr>
										<td>Registered Office Address</td>
										<td>100 Sample Road, London, W1 23Y, United Kingdom</td>
									</tr>
									<tr>
										<td>Industry</td>
										<td>Developer</td>
									</tr>
									<tr>
										<td>Year Established</td>
										<td>1955</td>
									</tr>
									<tr>
										<td>Number of Employees</td>
										<td>10-50</td>
									</tr>
								</table>
							</div>
							<div class="col-sm-3 company-quick-details">
								<p><img src="../images/logo-british.jpg"></p>
								<p>Active Projects <span class="project1">4</span></p>
								<p>Active Tenders <span class="project1">9</span></p>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4">				
			<div class="tender-container">
				<div class="active-tenders">
					<h3>Similar Projects</h3>
				</div>
				<div class="media">
					<a href="#">
						<div class="media-left">
							<img src="../../images/construction.jpg" width="80">
						</div>
						<div class="media-body">
							<h3>Canada Water Masterplan</h3>
							<p>Fire Engineer and 9 others</p>
						</div>
					</a>
				</div>
				<div class="media">
					<a href="#">
						<div class="media-left">
							<img src="../../images/construction.jpg" width="80">
						</div>
						<div class="media-body">
							<h3>Canada Water Masterplan</h3>
							<p>Fire Engineer and 9 others</p>
						</div>
					</a>
				</div>
				<div class="media">
					<a href="#">
						<div class="media-left">
							<img src="../../images/construction.jpg" width="80">
						</div>
						<div class="media-body">
							<h3>Canada Water Masterplan</h3>
							<p>Fire Engineer and 9 others</p>
						</div>
					</a>
				</div>
				<div class="media">
					<a href="#">
						<div class="media-left">
							<img src="../../images/construction.jpg" width="80">
						</div>
						<div class="media-body">
							<h3>Canada Water Masterplan</h3>
							<p>Fire Engineer and 9 others</p>
						</div>
					</a>
				</div>
				<div class="media">
					<a href="#">
						<div class="media-left">
							<img src="../../images/construction.jpg" width="80">
						</div>
						<div class="media-body">
							<h3>Canada Water Masterplan</h3>
							<p>Fire Engineer and 9 others</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="owl-container">
		<div class="active-tenders">
			<h3><a href="{{ url('/winwork') }}">Other Projects from British Land</a></h3>
		</div>
		<span class="prev"><i class="fa fa-angle-left"></i></span>
		<span class="next"><i class="fa fa-angle-right"></i></span>
		<div id="owl-carousel">
			<div class="owl-div">
				<a href="#">
					<div class="thumb-img thumbnail">
						<img src="../images/construction.jpg">
					</div>
					<div class="thumb-title">
						<h3>Canada Water Masterplan</h3>
						<p class="text-muted">Fire Engineer and 9 others</p>
					</div>
				</a>
			</div>
			<div class="owl-div">
				<a href="#">
					<div class="thumb-img thumbnail">
						<img src="../images/construction.jpg">
					</div>
					<div class="thumb-title">
						<h3>Canada Water Masterplan</h3>
						<p class="text-muted">Fire Engineer and 9 others</p>
					</div>
				</a>
			</div>
			<div class="owl-div">
				<a href="#">
					<div class="thumb-img thumbnail">
						<img src="../images/construction.jpg">
					</div>
					<div class="thumb-title">
						<h3>Canada Water Masterplan</h3>
						<p class="text-muted">Fire Engineer and 9 others</p>
					</div>
				</a>
			</div>
			<div class="owl-div">
				<a href="#">
					<div class="thumb-img thumbnail">
						<img src="../images/construction.jpg">
					</div>
					<div class="thumb-title">
						<h3>Canada Water Masterplan</h3>
						<p class="text-muted">Fire Engineer and 9 others</p>
					</div>
				</a>
			</div>
			<div class="owl-div">
				<a href="#">
					<div class="thumb-img thumbnail">
						<img src="../images/construction.jpg">
					</div>
					<div class="thumb-title">
						<h3>Canada Water Masterplan</h3>
						<p class="text-muted">Fire Engineer and 9 others</p>
					</div>
				</a>
			</div>
			<div class="owl-div">
				<a href="#">
					<div class="thumb-img thumbnail">
						<img src="../images/construction.jpg">
					</div>
					<div class="thumb-title">
						<h3>Canada Water Masterplan</h3>
						<p class="text-muted">Fire Engineer and 9 others</p>
					</div>
				</a>
			</div>
			<div class="owl-div">
				<a href="#">
					<div class="thumb-img thumbnail">
						<img src="../images/construction.jpg">
					</div>
					<div class="thumb-title">
						<h3>Canada Water Masterplan</h3>
						<p class="text-muted">Fire Engineer and 9 others</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>




<!-- end -->


@endsection

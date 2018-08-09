@extends('layouts.master') 

	<div class="container-fluid below-header">
	</div>

	<div class="container-fluid lounge-wrapper">
		<div class="row">
			<div class="col-sm-2 lounge-menu">
				<div class="row">
					<div class="lounge-title">
						<h2>Scope<br> Business Lounge</h2>
					</div>
				</div>
				<div class="clearfix"></div>
				<ul class="nav lounge-nav">
					<li>
						<a href="{{ url('/dashboard') }}" class="menu-title policies-link">Dashboards</a>
						<ul>
							<li><a href="{{ url('dashboard/emp_dashboard') }}"><i class="fa fa-circle-o"></i> Employer Dashboard</a></li>
							<li><a href="{{ url('dashboard/tend_dashboard') }}"><i class="fa fa-circle-o"></i> Tenderer Dashboard</a></li>
							<li><a href="{{ url('dashboard/benchmark_dashboard') }}"><i class="fa fa-circle-o"></i> Benchmarking</a></li>
						</ul>
					</li>
					<li>
						<a href="#" class="menu-title policies-link">My Profile</a>
						<ul>
							<li><a href="#"><i class="fa fa-circle-o"></i> Organisation</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Individuals</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Users</a></li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Membership</a></li>
						</ul>
					</li>
					<li>
						<a href="{{ url('dashboard/policies') }}" class="menu-title policies-link">Policies </a>			          
					</li>										
				</ul>
			</div>
			<div class="col-sm-10 col-sm-offset-2 lounge-main">
				<div class="row">
					<div class="col-sm-12 lounge-header">
						<span>Add New Project</span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="shadow-wrapper">
							<form method="post" class="new-project-form">
								<label>Open Tenders For</label>
								<div class="form-group tenders-checkbox">
									<input type="checkbox" name="tender" value="fire" id="fire" class="filled-in"> <label for="fire">Fire Engineer</label>
									<input type="checkbox" name="tender" value="acoustic" id="acoustic" class="filled-in"> <label for="acoustic">Acoustic Engineer</label>
									<input type="checkbox" name="tender" value="facade" id="facade" class="filled-in"> <label for="facade">Facade Engineer</label>
								</div>
								<div class="form-group">
									<label>Enter Project Description</label>
									<textarea class="form-control" name="" rows="10"></textarea>
								</div>
								<div class="form-group">
									<label>Upload Images</label>
									<input type="file" name="" class="btn btn-warning">
								</div>
								<div class="form-group project-form-table">
									<table class="table table-striped table-hover">
										<tr>
											<td>Project Title</td>
											<td>
												<input type="text" name=" " class="form-control">
											</td>
										</tr>		
										<tr>
											<td>Location</td>
											<td>
												<input type="text" name="" class="form-control">
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
															<div class="nested-input">
																<input type="text" name="" class="form-control">
															</div>
														</td>
														<td><button class="btn btn-warning add-fields-btn"><i class="fa fa-plus"></i></button></td>
													</tr>
													<tr>
														<td>
															<p><b>Tube Stations</b></p>
														</td>
														<td>
															<div class="nested-input">
																<input type="text" name="" class="form-control">
															</div>
														</td>
														<td><button class="btn btn-warning add-fields-btn"><i class="fa fa-plus"></i></button></td>
													</tr>
													<tr>
														<td>
															<p><b>Bus Lines</b> </p>
														</td>
														<td>
															<div class="nested-input">
																<input type="text" name="" class="form-control">
															</div>
														</td>
														<td><button class="btn btn-warning add-fields-btn"><i class="fa fa-plus"></i></button></td>
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
														<td>
															<div class="nested-input">
																<input type="text" name="" class="form-control">
															</div>
														</td>
													</tr>
													<tr>
														<td>History</td>
														<td>
															<div class="nested-input">
																<input type="text" name="" class="form-control">
															</div>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td>Types of Use</td>
											<td>
												<table width="100%">
													<tr>
														<td>
															<div class="col-sm-12">
																<div class="nested-input">
																	<select class="form-control">
																		<option>Residential</option>
																		<option>Office</option>
																		<option>Retail</option>
																	</select>
																</div>
															</div>
														</td>
														<td>
															<div class="nested-input">
																<input type="text" name="" class="form-control" placeholder="Area in m2">
															</div>
														</td>
														<td>
															<div class="col-sm-12">
																<div class="nested-input">
																	<input type="text" name="" class="form-control" placeholder="Area in Units">
																</div>
															</div>
														</td>
														<td>
															<div class="nested-input">
																<input type="text" name="" class="form-control" placeholder="Specifications">
															</div>
														</td>
														<td><button class="btn btn-warning add-fields-btn"><i class="fa fa-plus"></i></button></td>
													</tr>					
													<tr>
														<td>
															<div class="nested-input">
																Total
															</div>
														</td>
														<td colspan="4">
															<div class="nested-input">
																<input type="text" name="" class="form-control">
															</div>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td>Type of Development</td>
											<td>
												<input type="text" name="" class="form-control">
											</td>
										</tr>
										<tr>
											<td>Procurement Route</td>
											<td>
												<input type="text" name="" class="form-control">
											</td>
										</tr>
										<tr>
											<td>Construction Value</td>
											<td>
												<input type="text" name="" class="form-control">
											</td>
										</tr>
										<tr>
											<td>Milestones</td>
											<td>
												<table width="100%">
													<tr>
														<td>RIBA Stage 1 Completion</td>
														<td>
															<div class="nested-input">
																<input type="date" name="" class="form-control">
															</div>
														</td>
													</tr>
													<tr>
														<td>RIBA Stage 2 Completion</td>
														<td>
															<div class="nested-input">
																<input type="date" name="" class="form-control">
															</div>
														</td>
													</tr>
													<tr>
														<td>RIBA Stage 3 Completion</td>
														<td>
															<div class="nested-input">
																<input type="date" name="" class="form-control">
															</div>
														</td>
													</tr>
													<tr>
														<td>RIBA Stage 4 Completion</td>
														<td>
															<div class="nested-input">
																<input type="date" name="" class="form-control">
															</div>
														</td>
													</tr>
													<tr>
														<td>RIBA Stage 5 Completion</td>
														<td>
															<div class="nested-input">
																<input type="date" name="" class="form-control">
															</div>
														</td>
													</tr>
													<tr>
														<td>RIBA Stage 5 Completion</td>
														<td>
															<div class="nested-input">
																<input type="date" name="" class="form-control">
															</div>
														</td>
													</tr>
													<tr>
														<td>RIBA Stage 7 Completion</td>
														<td>
															<div class="nested-input">
																<input type="date" name="" class="form-control">
															</div>
														</td>
													</tr>
												</table>
											</td>								
										</tr>
										<tr>
											<td>Meetings</td>
											<td>
												<table width="100%">
													<tr>
														<td>
															<div class="col-sm-12">
																<div class="nested-input">
																	<input type="text" name="" class="form-control">
																</div>
															</div>
														</td>
														<td>
															<div class="nested-input">
																<input type="text" name="" class="form-control">
															</div>
														</td>
														<td><button class="btn btn-warning add-fields-btn"><i class="fa fa-plus"></i></button></td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td>Constraints</td>
											<td> 
												<table width="100%">
													<tr>
														<td colspan="2" width="90%">
															<div class="nested-input">
																<input type="text" name="" class="form-control">
															</div>
														</td>
														<td width="9%"><button class="btn btn-warning add-fields-btn"><i class="fa fa-plus"></i></button></td>
													</tr>
												</table>                             
											</td>
										</tr>
										<tr>
											<td>Supporting Documents</td>
											<td>
												<div class="nested-input">
													<input type="file" name="" class="btn btn-warning">
												</div>
											</td>
										</tr>
									</table>						
								</div>
								<div class="form-group">
									<input type="submit" name="" class="btn btn-warning">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
</div>


<!-- end -->





@extends('layouts.master')

@section('content')

	<div class="container-fluid below-header">
	</div>

	
	<div class="container-fluid lounge-wrapper">
		<div class="row">
			@include('sidemenu')
			<div class="col-sm-10 col-sm-offset-2 lounge-main">
				<div class="row">
					<div class="col-sm-12 lounge-header">
						<span>Edit Company Information</span>
					</div>
				</div>
				<div class="row">					
					<div class="col-sm-12">
						<div class="shadow-wrapper">
							<h3 class="org-head">Organization</h3>
							<div class="clearfix"></div>
							<div class="row">	
								<div class="col-sm-9">				
										<table class="table table-striped table-hover c-info-table">
											<tr>
												<td>Company Name</td>
												<td><input type="text" name="" class="form-control" placeholder="British Land"></td>
											</tr>
											<tr>
												<td>Registered Office Address</td>
												<td><input type="text" name="" class="form-control" placeholder="100 Sample Road, London, W1 23Y, United Kingdom"></td>
											</tr>
											<tr>
												<td>Services</td>
												<td>
													<table width="100%">
														<tr>
															<td width="50%">
																<select name="" class="form-control">
																	<option>Service 1</option>
																	<option>Service 2</option>
																	<option>Service 3</option>
																</select>
															</td>
															<td width="50%">
																<input type="date" name="" class="form-control">
															</td>
														</tr>
														<tr>
															<td colspan="2">
																<button class="btn btn-warning" style="margin-top: 10px;"><i class="fa fa-plus"></i> Add another service</button>
															</td>
														</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td>Awards</td>
												<td>
													<table width="100%">
														<tr>
															<td width="33.33%">
																<input type="text" name="" class="form-control" placeholder="Enter Name of Award">
															</td>
															<td width="33.33%">
																<input type="text" name="" class="form-control" placeholder="Enter Details">
															</td>
															<td width="33.33%">
																<input type="text" name="" class="form-control" placeholder="Year awarded">
															</td>
														</tr>
														<tr>
															<td colspan="3">
																<button class="btn btn-warning" style="margin-top: 10px;"><i class="fa fa-plus"></i> Add another award</button>
															</td>
														</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td>Track Record</td>
												<td>
													<table width="100%">
														<tr>
															<td colspan="3">
																<div class="form-group">
																	<input type="text" name="" class="form-control" placeholder="Enter Project Title">
																</div>
															</td>
														</tr>
														<tr>
															<td colspan="3">
																<div class="form-group">
																	<input type="text" name="" class="form-control" placeholder="Enter Project Value">
																</div>
															</td>
														</tr>
														<tr>
															<td width="33.33%">
																<div class="form-group">
																	<select class="form-control">
																		<option>Type of Use</option>
																		<option>Residential</option>
																		<option>Office</option>
																		<option>Retail</option>
																		<option>Hotel</option>
																	</select>
																</div>
															</td>
															<td width="33.33%">
																<div class="form-group">
																	<input type="text" name="" class="form-control" placeholder="Area">
																</div>
															</td>
															<td width="33.33%">
																<div class="form-group">
																	<input type="text" name="" class="form-control" placeholder="Units">
																</div>
															</td>
														</tr>
														<tr>
															<td colspan="3">
																<div class="form-group">
																	<button class="btn btn-warning"><i class="fa fa-plus"></i> Add another type of use</button>
																</div>
															</td>
														</tr>
														<tr>
															<td colspan="3">
																<label>Service Provided</label>
															</td>
														</tr>
														<tr>
															<td width="33.33%">
																<div class="form-group">
																	<select class="form-control">
																		<option>Service</option>
																		<option>Service 1</option>
																		<option>Service 2</option>
																		<option>Service 3</option>
																	</select>
																</div>
															</td>
															<td width="33.33%">
																<div class="form-group">
																	<input type="date" name="" class="form-control" placeholder="Area">
																</div>
															</td>
															<td width="33.33%">
																<div class="form-group">
																	<input type="date" name="" class="form-control" placeholder="Units">
																</div>
															</td>
														</tr>
														<tr>
															<td colspan="3">
																<div class="form-group">
																	<button class="btn btn-warning"><i class="fa fa-plus"></i> Add another service</button>
																</div>
															</td>
														</tr>
														<tr>
															<td colspan="3">
																<label>Type of Development</label>
															</td>
														</tr>
														<tr>
															<td colspan="3" class="tenders-checkbox">
																<input type="checkbox" name="development" class="filled-in" id="new"> <label for="new"> New built</label>
																<input type="checkbox" name="development" class="filled-in" id="refurbishment"> <label for="refurbishment"> Refurbishment</label>
																<input type="checkbox" name="development" class="filled-in" id="demolition"> <label for="demolition"> Demolition</label>
															</td>
														</tr>
														<tr>
															<td colspan="3">
																<div class="form-group">
																	<textarea class="form-control" rows="10" placeholder="Enter Project Description"></textarea>
																</div>
															</td>
														</tr>
														<tr>
															<td colspan="3">
																<div class="form-group">
																	<button class="btn btn-warning"><i class="fa fa-plus"></i> Upload Images</button>
																</div>
															</td>
														</tr>
														<tr>
															<td><label>Project Team Member</label></td>
															<td colspan="2"><label>Company</label></td>
														</tr>
														<tr>
															<td>
																<div class="form-group">
																	<select class="form-control">
																		<option>Project Team Member</option>
																		<option>Architect</option>
																		<option>MEP Engineer</option>
																		<option>Structural Engineer</option>
																	</select>
																</div>
															</td>
															<td colspan="2">
																<div class="form-group">
																	<input type="text" name="" class="form-control" placeholder="Enter Company">
																</div>
															</td>
														</tr>
														<tr>
															<td colspan="3">
																<div class="form-group">
																	<button class="btn btn-warning"><i class="fa fa-plus"></i> Add another project team member</button>
																</div>
															</td>
														</tr>
														<tr>
															<td colspan="3">
																<div class="form-group">
																	<button class="btn btn-warning"><i class="fa fa-plus"></i> Add another project</button>
																</div>
															</td>
														</tr>
													</table>
												</td>
											</tr>											
										</table>
								</div>
								<div class="col-sm-3 company-quick-details">
										<p><img src="{{ url('images/logo-british.jpg') }}"></p>
										<p><button class="btn btn-warning">Change Logo</button></p>
								</div>
							</div>
						</div>	
					</div>
				</div>			
			</div>
		</div>
	</div>
	

	
	
	<!-- end -->

@endsection



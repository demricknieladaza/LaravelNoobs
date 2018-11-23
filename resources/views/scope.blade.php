@extends('layouts.master')

@section('content')
<div class="container below-header ">
	<h1 id="logo" class="project-title bid-page-title centerh" style="margin-left: 5%;
	margin-right: 5%;">Project Dashboard</small></h1>
</div>

<div class="container" style="width: 95%;">
	<div class="row">
		<div class="col-sm-12">
			<div class="tender-container tendnew">
				<ul class="nav navs bid-form-nav">
					<li class="123"><a class="abut" href="#section1">Project</a></li> 
					<li class="active"><a class="abut">Scope</a></li>
					<li class="123"><a class="abut" href="{{ url('tenders/'.$id.'/edit') }}" >Tenders</a></li>
					<li class="123" id="cret" ><a class="abut" data-toggle="modal" data-target="#selectServe"><span>Create New Tender</span></a></li>
				</ul><br>
			</div>
		</div>
		<div class="col-sm-12 questionnaire-section">
			<div class="tab-content tabmargin">
				<div id="section2" class="tab-pane fade in active tender-container" style="padding-top:0;margin-left:auto;margin-right:auto;width:1040px;">
					<div class="row">
						<div style="padding-right: 15px; padding-left: 15px;margin-right: auto;margin-left: auto;min-height: 500px;">
							<h1 class="project-title bid-page-title">Design Responsibility Matrix</h1>
							<div class="col-sm-12">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="drm">Select view</label>
										<select id="drm" class="form-control">
											<option value="" disabled selected></option>
											<option value="stages">Stages</option>
											<option value="services">Services</option>
										</select>
									</div>
								</div>
								<div class="col-sm-4 selserv" style="display: none;">
									<div class="form-group">
										<label for="drm">Select service</label>
										<select id="drm" class="form-control">
											<option value="" disabled selected></option>
											@if (count($closed)!=0)
												@foreach ($closed as $element)
													<option value="{{$element->services}}">{{$element->services}}</option>
												@endforeach
											@else
												<option disabled>no successful tender yet.</option>
											@endif
										</select>
									</div>
								</div>
								<div class="col-sm-4 selrib" style="display: none;">
									<div class="form-group">
										<label for="drm">Select RIBA stage</label>
										<select id="drm" class="form-control">
											<option value="" disabled selected></option>
											
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#drm').change(function(){
			if($(this).val()=='stages'){
				$('.selserv').css('display','block');
				$('.selrib').css('display','none');
			}
			else if($(this).val()=='services'){
				$('.selserv').css('display','none');
				$('.selrib').css('display','block');
			}
			else{
				$('.selserv').css('display','none');
				$('.selrib').css('display','none');
			}
		});
	});
</script>

@endsection
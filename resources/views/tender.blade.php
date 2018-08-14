@extends('layouts.master')

@section('content')

	<br>
	<br>
	<br>

	<br>
	<br>
	<br>

	<br>

	<div class="container">

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">View Bid</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tenders</h4>
        </div>
        <div class="modal-body">
        
         
  <table class="table table-bordered">
    <thead>
      <tr>
         <th>#</th>
        <th>Tenderer</th>
        <th>Qualitative Score</th>
        <th>Quantitative Score</th>
        <th>Risk Score</th>
      </tr>
    </thead>
    <tbody>
      <tr>
       <td>1</td>
        <td>Company 1</td>
        <td>5</td>
        <td>9</td>
        <td>2</td>
      </tr>
      
    </tbody>

    <tbody>
      <tr>
       <td>2</td>
        <td>Company 2</td>
        <td>2</td>
        <td>4</td>
        <td>5</td>
      </tr>
      
    </tbody>
        <tbody>
      <tr>
       <td>3</td>
        <td>Company 3</td>
        <td>7</td>
        <td>8</td>
        <td>7</td>
      </tr>
      
    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  
</div>
<div class="container">

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">View Bid</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tenders</h4>
        </div>
        <div class="modal-body">
        
         
  <table class="table table-bordered">
    <thead>
      <tr>
         <th>#</th>
        <th>Tenderer</th>
        <th>Qualitative Score</th>
        <th>Quantitative Score</th>
        <th>Risk Score</th>
      </tr>
    </thead>
    <tbody>
      <tr>
       <td>1</td>
        <td>Company 1</td>
        <td>5</td>
        <td>9</td>
        <td>2</td>
      </tr>
      
    </tbody>

    <tbody>
      <tr>
       <td>2</td>
        <td>Company 2</td>
        <td>2</td>
        <td>4</td>
        <td>5</td>
      </tr>
      
    </tbody>
        <tbody>
      <tr>
       <td>3</td>
        <td>Company 3</td>
        <td>7</td>
        <td>8</td>
        <td>7</td>
      </tr>
      
    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  
</div>

<!-- end -->





@endsection

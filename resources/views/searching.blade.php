<!DOCTYPE html>
<html>
 <head>
  <title>Ajax Autocomplete Textbox in Laravel using JQuery</title>
  <link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">
  <script src="http://demo.expertphp.in/js/jquery.js"></script>
  <script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">Ajax Autocomplete Textbox in Laravel using JQuery</h3><br />
   
   <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                
                {!! Form::text('search_text', null, array('placeholder' => 'Search Text','class' => 'form-control','id'=>'search_text')) !!}
            </div>
        </div>
    </div>
   {{ csrf_field() }}
  </div>
 </body>
</html>

   
    
   <script>
   $(document).ready(function() {
    src = "{{ url('autocomplete') }}";
     $("#search_text").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: src,
                dataType: "json",
                data: {
                    term : request.term
                },
                success: function(data) {
                    response(data);
                   
                }
            });
        },
        minLength: 3,
       
    });
});
</script>
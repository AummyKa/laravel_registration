<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
       
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('bootstrap_css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/regist_css.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('datepicker_css/css/bootstrap-datepicker.min.css') }}">
    <link rel="shortcut icon" href="{{ url('img/favicon.ico') }}">

  </head>

	<body>

		
			<nav class="navbar navbar-default">
			    <ul class="nav navbar-nav" >
			 	 	<li><img src="{{ asset('img/mushroom.png') }}" height="50px" width="50px" style="margin:0px 0px 0px 20px" /></li> 
			 	 	<li><a class="navbar-brand" style="color:#ffffff">Project X</a></li> 
			 	 	<li><p class="navbar-text">by Aummyka</p></li> 
		       	 	
	       	 	</ul>
	       	 	<div class = "navbar-collapse collapse">
					<ul class = "nav navbar-nav navbar-right" style="margin:0px 0px 0px 3%" >
			       	 	<li><a href="{{ url('data_table')}}">List Of Users <span class="sr-only">(current)</span></a></li>
			       	</ul>
		       	</div>	
	       	 	
			</nav>
		
		

		<form id='content' action="{{ url('user/insert') }}" onsubmit="return validateForm()" method='post' accept-charset='UTF-8'>
			<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
			<div class="col-xs-3" name "first col">
				<div class = "first_col">
					<h1>Register</h1>
					<input type='hidden' name='submitted' id='submitted' value='1'/></br>
						<h3><label for='name' >First Name: </label></h3></br>
						<h3><label for='lastname' >Last Name: </label></h3></br>
						<h3><label for='username' >UserName:</label></h3></br>
						<h3><label for='password' >Password :</label></h3></br>
						<h3><label for='Sex' >Sex :</label></h3></br>
						<h3><label for='Birthday' >Birthday :</label></h3></br>
										
		 		</div>
			</div>

			<div class="col-xs-3" name "second_col">
				<div class = "second_col">
					<h4><input type='text' name='name' id='name' maxlength="50" /></h4></br>
					<h4><input type='text' name='lastname' id='lastname' maxlength="50" /></h4></br>
					<h4><input type='text' name='username' id='username' maxlength="50" /></h4></br>
					<h4><input type='password' name='password' id='password' maxlength="50" /></h4></br>
					<h4><input type="radio" name="sex" value="Male">Male
					<input type="radio" name="sex" value="Female">Female</h4></br>
					<h4><input type="text" name = "date_of_birth" class="datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" id="dp1"></h4>	 
				</div>
			</div>

			<div class="col-xs-3" name "third_col">
				<div class = "third_col">
					<h><label for='Interest' >Interest :</label></h><br>							
				</div>	
			</div>

			<div class="col-xs-3" name "fotrh_col">
				<div class = "forth_col">
					<h5><input type="checkbox" name="interest[]" value="Games">    Games<br></h5>
					<h5><input type="checkbox" name="interest[]" value="Sport">    Sport<br></h5>
					<h5><input type="checkbox" name="interest[]" value="Music">    Music<br></h5>
					<h5><button type="submit" name = 'Submit' class="btn btn-default" value='Submit' >Submit</button></h5>
				</div>
			</div>

		</form>



<script type="text/javascript" src="{{ URL::asset('js/jquery-1.9.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery-ui-1.10.3.custom.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.ui.touch-punch.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap-select.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('js/flatui-checkbox.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/flatui-radio.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.tagsinput.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.placeholder.js') }}"></script>


<script type="text/javascript" src="{{ URL::asset('js/jssor.core.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jssor.utils.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jssor.slider.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('datepicker_css/js/bootstrap-datepicker.js') }}"></script>
<script  src="{{ URL::asset('js/validate.js') }}"></script>


    <script> 
    $(document).ready(function() {
	    $('#dp1').datepicker();
	});
	</script>
	

    <script type="text/javascript">

	function edit_id(id)
	{
	 if(confirm('Sure to edit this record ?'))
	 {
	  window.location='edit_form.php?edit_id='+id
	 }
	}
	</script>
	



  </body>
</html>
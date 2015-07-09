
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	

  	<link rel="stylesheet" type="text/css" href="{{ url('maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css') }}">
  	<link rel="stylesheet" type="text/css" href="{{ url('cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css') }}">
  	<script type="text/javascript" src="{{ URL::asset('//code.jquery.com/jquery-1.11.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js') }}"></script>


    <title>User list</title>
          

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('bootstrap_css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/myCss.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/table_style.css') }}">

    <!-- Loading Flat UI -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/flat-ui.css') }}">
    <link rel="shortcut icon" href="img/favicon.ico">

   
   	</head>

	<body>

	
	<div class="container" >
  		<h2>User List</h2>
  		<div id="hideaway" style="display:none","color: #9EA1A4" ><h>Status:   </h></div>

  		<div class = "btn_add">
  			<a href="{{ url('register')}}" type="button" class="btn btn-primary">Add New User</a>
  		</div>

  		<table id="table_display" class="table table-striped table-bordered" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Name</th>
				<th>Lastname</th>
				<th>Username</th>
				<th>Sex</th>
				<th>Birthday</th>
				<th>Interest</th>
				<th></th>
				<th></th>
			</tr></thead>
			<tbody>
				@foreach($results as $result)
				<tr>
					<td>{{ $result->name }}</td>
					<td>{{ $result->lastname }}</td>
					<td>{{ $result->username }}</td>
					<td>{{ $result->sex }}</td>
					<td>{{ $result->date_of_birth }}</td>
					<td>{{ $result->interest}}</td>

					<td>
					<form action="{{ url('user/delete') }}" method="post">
				       	<input type="hidden" name="_token" value="{{ csrf_token() }}">
				       	<input type="hidden" name="user_id" value="{{ $result->id }}">
				 		<button type = 'submit' class = "btn btn-danger">Delete</button>
			       </form>
            		 </td>
            		 <td><a href="{{ url('user/'.$result->id.'/edit') }}" class="btn btn-info" role="button">Edit</a></td>
        		 </tr>
				@endforeach
					
				
				
			</tbody>
			</table>
  
	
	


 <!-- Load JS here for greater good =============================-->
   	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
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
	<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
	<script src="validate.js"></script>
	




<script>
		$(document).ready(function() {
			console.log($('#table_display'));
    		$('#table_display').dataTable( {
				"bFilter": false, // Disable searching
				// "bPaginate": false, // Disable pagination
				// "bInfo": false,   // Disable info texts


    		"aoColumnDefs": [
        		{ 	        			
        		 	'bSortable': false, 'aTargets': [3,5,6,7], //Disable sorting
        		 },
        		
    		],

        	}


      );
});


	</script>
</body>
  

</html>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div class="container">
	<a href="#">
		<button class="btn btn-success pull-right">Log Out</button>
	</a>	<br><br><br>	
	<div class="panel panel-default">
			<div class="panel-heading">
		    	<h3 class="panel-title text-center">News Portal</h3>
		  	</div>
		  	<div class="panel-body">
		    	<table class="table">
					<tr>
				    	<td>News</td>
				    	<td>
				    		<a href="show"><button class="btn btn-primary">View</button></a>
				    		<a href="create"><button class="btn btn-success">Add New</button></a>
				    	</td>
				    	
				    </tr>
					<tr>
				   		<td>Cotegories</td>
				   		<td>
				   			<a href="#"><button class="btn btn-primary">View</button></a>
							<form action="/admin" method="POST">
								{{csrf_field()}}
								<input type="text" name="add_category">
				   				<button class="btn btn-success">Add Category</button>
				   			</form>
				   		</td>

				    </tr>
				    <tr>
				   		<td>Users</td>
				   		<td><a href="#"><button class="btn btn-primary">View</button></a></td>
				    </tr>
  				</table>
		  	</div>
		</div>
	</div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>News</title>
	<link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
		    	<h3 class="panel-title text-center">News</h3>
		  	</div>
		  	<div class="panel-body">
		    	<table class="table">
		    		<thead>
		 				<th>ID</th>
		 				<th>Title</th>
		 				<th>Text</th>
		 				<th>Category</th>
		 				<th>Editor</th>
		 				<th>Time</th>
		 				<th>ACTION</th>
 					</thead>
 					<tbody>
 						@foreach($data as $xeberler)
	 						<tr>
					    		<td>{{ $xeberler->id}}</td>
					    		<td>{{ $xeberler->news_title}}</td>
					    		<td>{{ $xeberler->news_text}}</td>
					    		<td> {{ $xeberler->category->category_name }} </td>
								<td> {{ $xeberler->user->name }} </td>								 
					    		<td> {{ $xeberler->created_at }} </td>
					    		<td>
						    		<a href="/xeber/{{$xeberler->id}}/edit"><button class="btn btn-success">Edit</button></a>
						    		<form action="xeber/{{ $xeberler->id }}/delete" method="post">
						    			{{method_field('DELETE')}}
						    			{{csrf_field()}}
						    			<button class="btn btn-danger">Delete</button>
						    		</form>
					    		</td>
					    	</tr>
					    @endforeach
 					</tbody>
  				</table>
  				<a href="/create"><button class="btn btn-success">CREATE</button></a>
		  	</div>
		</div>
	</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
	<script src="ckeditor/ckeditor.js"></script>
</head>
<body>
<div class="container">

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title text-center">Add New</h3>
		</div>
		<div class="panel-body">
			<form action="/create" method="POST" enctype="multipart/form-data">
				{{csrf_field()}}
				<label class="form-control-label">Title</label>
		            <input class="form-control" type="title" name="title">
		            <!-- <textarea name="title" class="ckeditor"></textarea><br> -->
		        <label class="form-control-label">Text</label>
		        	<textarea name="text" class="ckeditor"></textarea><br>
		        <label class="form-control-label">Image</label>
		            <input type="file" name="img" class="btn btn-primary"><br>
		        <label class="form-control-label">Category</label>
					<select class="form-control" name="cat">
						<option>Categories</option>
							@foreach($data as $category )
								<option value=" {{ $category->id }}"> {{ $category->category_name }}</option>
							@endforeach
					</select>
		        <input class="btn btn-success" type="submit" name="submit" value="Create">
			</form>
		</div>
	</div>


	<a href="/show">Show all News</a>

</div>
	<script type="text/javascript" src="assets/vendors/jquery/jquery-3.1.0.js"></script>
    <script type="text/javascript" src="assets/vendors/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>


</body>
</html>
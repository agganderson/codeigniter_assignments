<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Semi Restful Routes</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
	integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
	</script>
</head>
<body>
	<div class="container">
		<h1>Add a new product!</h1>
		<br>
		<form action="/products/add" method="POST" role="form">
		    <div class="form-group">
		      <label for="name">Name:</label>
		      <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name...">
		    </div>
		    <div class="form-group">
		      <label for="description">Description:</label>
		      <input type="text" class="form-control" id="description" name="description" placeholder="Enter description...">
		    </div>
		    <div class="form-group">
		      <label for="price">Price:</label>
		      <input type="text" class="form-control" id="price" name="price" placeholder="Enter price...">
		    </div>
		    <button type="submit" class="btn btn-block btn-default">Create</button>
		</form>
		<br>
		<br>
			<a href="/">Go Back</a>
	</div>
</body>
</html>
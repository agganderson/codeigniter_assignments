<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<title>Courses</title>
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
	<div class='container'>

		<div class='top'>
			<br>
			<h1>Add a new course!</h1>
			<br>
			<form class="form-horizontal" role="form" action="/Courses/create" method="POST">
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="name">Course:</label>
			      <div class="col-sm-10">
			        <input type="text" class="form-control" id="name" name="name" placeholder="Enter course name...">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="description">Description:</label>
			      <div class="col-sm-10">          
			        <textarea type="text" class="form-control" id="description" name="description" placeholder="Enter course description..."></textarea>
			      </div>
			    </div>
			    <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-10">
					<input type="submit" class="btn btn-success btn-md" value="Add Course">
			      </div>
			    </div>
		  	</form>
		</div>

		<div class='bottom'>
			<table class="table table-striped">
				<h2>Courses</h2>
			    <thead>
			      <tr>
			        <th>Course Name:</th>
			        <th>Course Description:</th>
			        <th>Date Added:</th>
			        <th>Actions:</th>
			      </tr>
			    </thead>
			    <tbody>
			    	<?php foreach($courses as $course){ ?>
			    		<tr>
			    			<td><?= $course['name'] ?></td>
			    			<td><?= $course['description'] ?></td>
			    			<td><?= $course['created_at'] ?></td>
			    			<td><?= $course['name'] ?></td>
			    			<td><a href="courses/destroy/<?= $course['id'] ?>" class="btn btn-danger btn-xs">Remove</a></td>
			    		</tr>

			    	<?php } ?>
			    </tbody>
			</table>
		</div>

	</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>All Users</title>
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
		<div class="col-md-6">
			<h2>All Users</h2>
			  <table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>First Name</th>
			        <th>Last Name</th>
			      </tr>
			    </thead>
			    <tbody>
			    	<?php foreach($all_users as $user){ ?>
			      <tr>
			        <td><?= $user['first_name'] ?></td>
			        <td><?= $user['last_name'] ?></td>
			      </tr>
			      <?php } ?>
			    </tbody>
			  </table>
  		</div>
	</div>
</body>
</html>
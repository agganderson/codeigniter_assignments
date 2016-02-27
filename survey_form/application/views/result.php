<!DOCTYPE html>
<html lang='en'>
<head>
	<title>Your Survey Information</title>
	  <!-- Latest compiled and minified CSS -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
	  integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	  <!-- Optional theme -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
	  integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	  <!-- Latest compiled and minified JavaScript -->
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
	  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<br>
		<?php 
			$survey_data = $this->session->userdata('survey_data');
		?>
		<h2>Thank you for submitting your information. You've submitted this form <?= $this->session->userdata('counter') ?> times.</h2>
		<table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>Name</th>
		        <th>Location</th>
		        <th>Favorite Language</th>
		        <th>Comment</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td><?= $survey_data['name'] ?></td>
		        <td><?= $survey_data['location'] ?></td>
		        <td><?= $survey_data['language']?></td>
		        <td><?= $survey_data['comment'] ?></td>
		      </tr>
		    </tbody>
		</table>
		<br>
		<a href="/" class="btn btn-primary">Go Back</a>
	</div>
</body>
</html>
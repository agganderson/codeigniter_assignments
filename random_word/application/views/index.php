<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Random Word Generator</title>
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
	<div class="container text-center">
		<?php 	if($this->session->userdata('attempt'))
			echo "<p>Random Word (attempt # " . $this->session->userdata('attempt') . ")</p>";
		?>
		<br>
		<?php if($this->session->userdata('word')){
				echo "<h1>" . $this->session->userdata('word') . "</h1>";
			}
			else{
				echo "<h1>Click generate below to get a word</h1>";
			}
		 ?>
		<form action="/randoms/generate" method="post">
			<input type="hidden" name="word">
			<input type="submit" value="Generate" class="btn btn-btn-primary">
		</form>
	</div>
</body>
</html>
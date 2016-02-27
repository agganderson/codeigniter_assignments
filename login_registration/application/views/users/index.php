 <?php
	session_start();
 ?>

<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<title>Login/Registration</title>
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
		<!-- begin login form -->
		<div id="login">
		  <h2>Login</h2>
			<?php		
				if($this->session->flashdata("login_errors")){
					echo $this->session->flashdata("login_errors");
				}
			?>
		  <form id="login" action="/Users/process_login" method="POST" class="form-horizontal" role="form">
		    <div class="form-group">
		      <label class="control-label col-sm-2" for="email">Email:</label>
		      <div class="col-sm-10">
		        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email...">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-2" for="password">Password:</label>
		      <div class="col-sm-10">          
		        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password...">
		      </div>
		    </div>
		    <div class="form-group">        
		      <div class="col-sm-offset-2 col-sm-10">
		        <button type="submit" class="btn btn-default btn-block">Login</button>
		      </div>
		    </div>
		  </form>
		</div>
		<!-- end login form -->
		<hr>
		<hr>
		<!-- begin register form -->
		<div id="register">
		  <h2>Register</h2>
			<?php		
				if($this->session->flashdata("registration_errors")){
				echo $this->session->flashdata("registration_errors");
				}
			?>
		  <form id="register" action="/Users/process_registration" method="POST" class="form-horizontal" role="form">
		    <div class="form-group">
		      <label class="control-label col-sm-2" for="first_name">First Name:</label>
		      <div class="col-sm-10">
		        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter a first name...">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-2" for="email">Last Name:</label>
		      <div class="col-sm-10">
		        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter a last name...">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-2" for="email">Email:</label>
		      <div class="col-sm-10">
		        <input type="email" class="form-control" id="email" name="email" placeholder="Enter an email...">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-2" for="password">Password:</label>
		      <div class="col-sm-10">          
		        <input type="password" class="form-control" id="password" name="password" placeholder="Enter a password...">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-2" for="confirm_password">Confirm Password:</label>
		      <div class="col-sm-10">          
		        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm your password...">
		      </div>
		    </div>
		    <div class="form-group">        
		      <div class="col-sm-offset-2 col-sm-10">
		        <button type="submit" class="btn btn-default btn-block">Register</button>
		      </div>
		    </div>
		  </form>
		</div>
		<!-- end register form -->

	</div>
</body>
</html>
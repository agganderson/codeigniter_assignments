<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">	
	<title>Ninja Gold</title>
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

	<style type="text/css">
		.form-group {
			height: 200px;
			width: 200px;
			margin: 15px;
		}

		#activities {
			height: 200px;
			width: 700px;
			display: inline-block;
		}

		.clear {
			clear: both;
		}

		.red {
			color: red;
			display: block;
		}

		.green {
			color: green;
			display: block;
		}

		.success {
			background: green;
			color:#fff;
			padding: 12px 20px;
		}

		.error {
			background: red;
			color: #fff;
			padding: 12px 20px;
		}

		.gold {
			float: left;
			margin: 20px 0;
		}

		.restart {
			float: left;
			margin: 20px 0 20px 30px;
		}

		.building {
			border: 1px solid;
			width: 179px;
			height: 140px;
			float: left;
			margin-right: 20px;
			text-align: center;
		}

		.log {
			margin-top: 20px;
		}

		#log {
			border: 1px solid;
			font-size: 13px;
			width: 780px;
			height: 150px;
			overflow-y: auto;
		}
	</style>

</head>
<body>
	<div class="container">
		<h1>Your Gold: </h1>
		<input type="text" name="your-gold" value="<?php echo ($this->session->userdata('gold_count') != false) ? $this->session->userdata('gold_count') : '' ?>" disabled>
		<div class="boxes">

			<form id="restart-form" action="/process_money" method="post">
				<input type="hidden" name="action" value="restart_form" />
				<br>
				<button type="submit" class="btn btn-primary">Start Over</button>
			</form>

			<form action="/golds/process_money" method="POST">
				<div class="form-group col-md-4">
					<h2>Farm</h2>
					<p>(earns 10-20 golds)</p>
					<input type="hidden" name="building" value="farm">
					<button type="submit" class="btn btn-warning">Find Gold</button>
				</div>
			</form>

			<form action="/golds/process_money" method="POST">
				<div class="form-group col-md-4">
					<h2>Cave</h2>
					<p>(earns 5-10 golds)</p>
					<input type="hidden" name="building" value="cave">
					<button type="submit" class="btn btn-warning">Find Gold</button>
				</div>
			</form>

			<form action="/golds/process_money" method="POST">
				<div class="form-group col-md-4">
					<h2>House</h2>
					<p>(earns 2-5 golds)</p>
					<input type="hidden" name="building" value="house">
					<button type="submit" class="btn btn-warning">Find Gold</button>
				</div>
			</form>

			<form action="/golds/process_money" method="POST">
				<div class="form-group col-md-4">
					<h2>Casino</h2>
					<p>(earns/takes 0-50 golds)</p>
					<input type="hidden" name="building" value="casino">
					<button type="submit" class="btn btn-warning">Find Gold</button>
				</div>
			</form>
		</div>

		<div class="clear"></div>
		<div class="log">
			<span>Activities:</span>
			<div id="log">
			<?php 			
				if ($this->session->userdata('activity')){
					foreach ($this->session->userdata('activity') as $activity) {
						if(strpos($activity,'Ouch'))
							echo "<span class='red'>" . $activity . "</span>";
						else
							echo "<span class='green'>" . $activity . "</span>";
					}
				}
			?>
			</div>	
		</div>


	</div>
</body>
</html>
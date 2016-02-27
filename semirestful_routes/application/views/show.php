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

	<style type="text/css">
		.tab {
			margin-left: 20px;
		}
	</style>

</head>
<body>
	<div class="container">
		<div class="col-md-6">
			<h1>Product <?= $product['id'] ?></h1>
			<h4>Name: </h4>
				<p class="tab"><?= $product['name'] ?></p>
			<h4>Description:</h4>
				<p class="tab"><?= $product['description'] ?></p>
			<h4>Price:</h4>
				<p class="tab"><?= $product['price'] ?></p>
			<br>
			<br>
			<a href="/products/edit_product/<?= $product['id'] ?>">Edit</a>  |  <a href="/">Back</a>
		</div>
	</div>
</body>
</html>
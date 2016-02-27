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
		<h1>Products</h1>
		<table class="table table-striped">
		    <thead>
		      <tr>
		        <th>Name</th>
		        <th>Description</th>
		        <th>Price</th>
		        <th>Actions</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<?php foreach($products as $product){ ?>
		      <tr>
		        <td><?= $product['name'] ?></td>
		        <td><?= $product['description'] ?></td>
		        <td><?= $product['price'] ?></td>
		        <td><a href="/products/show_product/<?= $product['id'] ?>">Show</a> | <a href="/products/edit_product/<?= $product['id'] ?>">Edit</a> | <a href="/products/delete/<?= $product['id'] ?>" class="btn btn-danger btn-xs" role="button">Remove</a></td>
		      </tr>
		      <?php } ?>
		    </tbody>
		  </table>
		  <a href="/products/new_product">Add a new product</a>
	</div>
</body>
</html>
<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>	
	<title>Quotes</title>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script>
		$(document).ready(function(){
			//we are getting all of the quotes so that when the user first requests the page
			//the page will already be rendering the quotes
			$.get('/quotes/index_html', function(res){
				//this url returns html string so we can dump that straight into div #quotes
				$('#quotes').html(res);
			});
			$('form').submit(function(){
				//there are three arguments that we are passing into $.post function
				//		1. the url we want to go to: '/quotes/create'
				//		2. what we want to send to this url: $(this).serialize()
				//				$(this) is the form and by calling .serialize() function on the form it will
				//				send post data ro the url with the names in the inputs as keys
				//		3. the function we want to run when we get a response:
				//				function(res) {$('#quotes').html(res)}
				$.post('/quotes/create', $(this).serialize(), function(res){
					$('#quotes').html(res);					
				});
				//we have to return false for it to be a singe page application. Without it, jQuery's submit function
				// will refresh the page, which defeats the point of AJAX
				//The form below still contains 'action' and 'method' attribute, but they are ignored
				return false;
			});
		});
	</script>

	<style type="text/css">
		form {
			margin-bottom: 30px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Quotsy</h1>
		<form action='/quotes/create' method='post'>
			<p>
				<label>Author: </label>
				<input type="text" name="author">
			</p>
			<p>	
				<label>Quote: </label>
				<textarea name="quote">
				</textarea>
			</p>
			<input input="submit" value="Add Quotes">
		</form>
		<div id="quotes">
		</div>
	</div>
</body>
</html>
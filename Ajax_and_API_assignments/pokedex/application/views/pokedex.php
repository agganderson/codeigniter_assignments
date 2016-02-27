
<html>
<head>
	<title>Pokemon</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script>
    $(document).ready(function(){
		var poke = '';
		for(var p = 1; p < 152; p++)
		{
			poke += '<img id="'+p+'" src="http://pokeapi.co/media/img/'+p+'.png">';
		}
		$('#pokemon').html(poke);
		$('img').click(function()
		{
			var id = $(this).attr('id');
			$.get('http://pokeapi.co/api/v1/pokemon/'+id, function(pokemon)
			{
				var pokedex = '';
				pokedex += '<h2>'+pokemon.name+'</h2>';
				pokedex += '<img src="http://pokeapi.co/media/img/'+id+'.png">';
				pokedex += '<h4>Types</h4>';
				pokedex += '<ul>';
				for(var i = 0; i < pokemon.types.length; i++)
				{
					pokedex += '<li>'+pokemon.types[i].name;+'</li>';
				}
				pokedex += '</ul><h4>Height</h4>';
				pokedex += pokemon.height;
				pokedex += '<h4>Weight</h4>';
				pokedex += pokemon.weight;
				$('#dex').html(pokedex);
			}, 'json');    	
		});
    });
    </script>

    <style type="text/css">
    	#pokemon {
			width: 800px;
			display: inline-block;
			vertical-align: top;
		}

		#dex {
			width: 200px;
			height: 500px;
			padding: 10px;
			border: solid red 2px;
			display: inline-block;
			vertical-align: top;
		}
    </style>

</head>
<body>
	<div id="pokemon">
	</div>
	<div id="dex">
	</div>
</body>
</html>
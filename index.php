<!DOCTYPE html>
<html>
<head>
	<title> Pokefinder </title>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Tomorrow&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style/main.css"/>
</head>
<body>
	<center>
		<div class="card">
			<?php
				require_once('model/Pokemon.php');
				require_once('controllers/DBController.php');
				$dbController = new DBController("localhost","root","","pokedex");
				$randomPokemonId = rand(1,722);
				$pokemon = $dbController->getPokemon($randomPokemonId);
				$src = 'https://img.pokemondb.net/sprites/black-white/anim/normal/'.$pokemon->getName().'.gif';
				echo '<img src="'.$src.'" alt="monster">';
			?>
			<div class="container">
				<?php 
					echo '<h4><b>'.strtoupper($pokemon->getName()).'</b></h4>';
				?>	
				<table>
					<tr>
						<td class="atribute">Id: </td>
						<td class="value">
							<?php echo $pokemon->getId() ?>
						</td>
						<td class="atribute">Name: </td>
						<td class="value">
							<?php echo $pokemon->getName() ?>
						</td>
						
					</tr>

					<tr>
						<td class="atribute">Weight: </td>
						<td class="value">
							<?php echo $pokemon->getWeight() ?>
						</td>
						<td class="atribute">Height: </td>
						<td class="value">
							<?php echo $pokemon->getHeight() ?>
						</td>
						
					</tr>

					<tr>
						<td class="atribute">Base Experience: </td>
						<td class="value">
							<?php echo $pokemon->getBase_experience() ?>
						</td>
					</tr>
				</table> 
				<button type="button" onclick="reload()"> Escapar </button>

			</div>
		</div>
	</center>
</body>
</html>
<script src="js/main.js"></script>
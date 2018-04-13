<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tables de multiplication</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">		<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="container">
	<section class="card-panel center-align row">
		<h1>Les tables de multiplication</h1>
		<form class="container col s12 m12 l6" method="post" action="index.php">
			<article class="card-panel hoverable">
			<h2>Table de multiplication au choix:</h2>
			<div class="input-field">
				<select name="val" id="select">
					<option value="1">Table de 1</option>
					<option value="2">Table de 2</option>
					<option value="3">Table de 3</option>
					<option value="4">Table de 4</option>
					<option value="5">Table de 5</option>
					<option value="6">Table de 6</option>
					<option value="7">Table de 7</option>
					<option value="8">Table de 8</option>
					<option value="9">Table de 9</option>
					<option value="10">Table de 10</option>
				</select>
			<label class="absolute">Tables de multiplications</label>
			</div>
			<button class="waves-effect waves-light btn" type="submit">Validez</button>			
			</article>
			<article class="card-panel">
				<?php
					if (isset($_POST["val"])) $a=trim($_POST["val"]);
					else $a=3;
					
					"</br></br>";
					echo "<table class='centered striped'>";
					
					for($i=1;$i<11;$i++){
						$r=$a*$i;
						echo "<tr><td> ".$i."  x  ".$a."  =  $r </td></tr>";
					}
					echo "</table><br>";
				?>
			</article>
			<div class="card-panel">
				<a class="waves-effect waves-light btn pulse" href="quiz.php">Je souhaite m'entrainer dans le mode révision !</a>
			</div>
		</form>
		<form class="container col s12  l6" action="index.php" method="post">	
			<article class="card-panel hoverable">
			<h2> Ou plusieurs : </h2>
			<div class="input-field row">
				<label for="one">
					<input type="checkbox" name="number[]" id="one" value="1">1</input>
					<span></span>
				</label>
				<label for="two">
					<input type="checkbox" name="number[]" id="two" value="2">2</input>
					<span></span>
				</label>
				<label for="three">
					<input type="checkbox" name="number[]" id="three" value="3">3</input>
					<span></span>
				</label>
				<label for="four">
					<input type="checkbox" name="number[]" id="four" value="4">4</input>
					<span></span>
				</label>
				<label for="five">
					<input type="checkbox" name="number[]" id="five" value="5">5</input>
					<span></span>
				</label>
				<label for="six">
					<input type="checkbox" name="number[]" id="six" value="6">6</input>
					<span></span>
				</label>
				<label for="seven">
					<input type="checkbox" name="number[]" id="seven" value="7">7</input>
					<span></span>
				</label>
				<label for="eight">
					<input type="checkbox" name="number[]" id="eight" value="8">8</input>
					<span></span>
				</label>
				<label for="nine">
					<input type="checkbox" name="number[]" id="nine" value="9">9</input>
					<span></span>
				</label>
				<label for="ten">
					<input type="checkbox" name="number[]" id="ten" value="10">10</input>
					<span></span>
				</label>
			</div>
			<div class="container">
				<button class="waves-effect waves-light btn" type="submit">Validez !</button>
			</div>
			</article>
			<article class="flex_wrap">
				<?php
					if (isset($_POST["number"])) {
					$numbers = $_POST['number']; //recupération tableau number dans la variable numbers
					$length = count($numbers); //longueur du tableau
					
					for($i = 0; $i < $length; $i++) { //boucle du tableau entier
					
					$number = $numbers[$i]; // variable numbers de I stocké dans la variable number
					echo "<div class='across'><p class='important_word'>Table de $number</p>";
					echo "<table class='centered striped'>"; //tableau 					
					
					for($j = 1; $j <= 10; $j++) { //boucle des calculs
						echo "<tr><td> ".$j."  x  ".$number."  =  ".$j * $number." </td></tr>"; //tableau contenant les tables
						}
						echo "</table></div><br>"; //finir la boucle du tableau
						}
					}
				?>
			</article>
		</form>
	</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script src="script.js"></script>
</body>
</html>
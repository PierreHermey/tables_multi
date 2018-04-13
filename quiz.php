<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Quiz</title>
</head>
<body class="container">
    <section class="card-panel center-align row">
        <h1>Mode revision</h1>
        <a class="waves-effect waves-light btn" href="index.php"><i class="material-icons small">undo</i>Retourner vers les revisions</a>
        <form method="post" action="quiz.php">
            <div class="important_word_quiz input-field ">                    
                <?php
                    if(isset($_POST['valid'])){ 
                    $valuRandom = rand(1,10);
                        echo '<i class="material-icons large">school</i><p>' .$valuRandom.' x '.$_POST['select']. '</p>';
                    }
                ?>
                <?php
                    if(isset($_POST['validResult'])){
                    
                    $randomHide = $_POST['randomHide'];
                    $valueHide = $_POST['valueHide'];
                    $resultUser = $_POST['result'];
                    $resultTest = $randomHide * $valueHide;
                    
                    if($resultUser == $resultTest){
                        echo('<i class="material-icons large">thumb_up</i><p class="win">Bien joué, c\'est le bon résultat !</p>');
                    } else {    
                        echo '<i class="material-icons large">thumb_down</i><p class="lose">Le résultat était : ' .$resultTest. ' <br> Et non : ' .$resultUser. '.</p>';
                        }
                    }
                ?>
            </div>
            <div class="input-field col s12 m12 l6">
				<select name="select" id="select">
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
                <label class="absolute">Tables   de multiplications</label>
                <button class="waves-effect waves-light btn" type="submit" name="valid">Validez !</button>
			</div>
            <div class="input-field col s12 m12 l6">
                <input type="text" name="result">
                <input type="hidden" name="randomHide" value="<?php if (isset($valuRandom)){ echo $valuRandom;} ?>">
                <input type="hidden" name="valueHide" value="<?php if (isset($_POST['select'])){echo $_POST['select'];} ?>">
                <button type ="submit" class="waves-effect waves-light btn" name="validResult">Resultat</button>
            </div>           
        </form>
        </article>
    </section> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script src="script.js"></script>   
</body>
</html>

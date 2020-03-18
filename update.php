<?php
if(isset($_POST['name'])){
$name = $_POST['name']; 
$difficulty = $_POST['difficulty'];
$distance = $_POST['distance']; 
$duration = $_POST['duration']; 
$heightdiff = $_POST['height_difference']; 
$id= $_POST['id'];
try {

	$pdo = new PDO('mysql:host=localhost;dbname=rando', 'root', '');
	} catch (Exception $e) {
		
		die('erreur: '. $e->getMessage());
	}

	$sql = $pdo->
	query("	UPDATE randonnee 
			SET name='$name', difficulty='$difficulty', distance='$distance', duration='$duration',height_difference='$heightdiff' 
			WHERE id=$id");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>

<body>
	<a href="/php-pdo/read.php">Liste des données</a>
	<h1>Ajouter</h1>
	<form action="" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="">
		</div>

		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
				<option value="très facile">Très facile</option>
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
				<option value="très difficile">Très difficile</option>
			</select>
		</div>

		<div>
			<label for="distance">Distance</label>
			<input type="text" name="distance" value="">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="duration" name="duration" value="">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="text" name="height_difference" value="">
		</div>
		<input type="text" value="<?=$_GET['id']?>" name="id" hidden>
		<button type="submit" name="button">Envoyer</button>
	</form>
</body>

</html>
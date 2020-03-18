<?php
try {

$pdo = new PDO('mysql:host=localhost;dbname=rando', 'root', '');
} catch (Exception $e) {
    die('erreur: '. $e->getMessage());
}
$results = $pdo->query('SELECT * FROM randonnee');
while($donnees = $results->fetch())
echo "<a href='update.php?id=".$donnees['id']."'>".$donnees['name'].'</a>
<br>'.$donnees['difficulty'].
'<br>'.$donnees['distance'].
'<br>'.$donnees['height_difference'].'<br>';
$results->closeCursor()


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1>Liste des randonnées</h1>
    <table>
      <!-- Afficher la liste des randonnées -->
    </table>
  </body>
</html>

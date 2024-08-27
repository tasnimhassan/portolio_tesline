<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<section>
<h2>Liste des etudiant</h2>	
<table border=1>
<tr><td><b>Numero</td><td><b>Nom</td><td><b>Email</td><td><b>Avis</td></tr>
<?php
// Effectuer la connexion à la Base de Données
$serverName = "localhost";       // serveur local
$userName = "root";   // administrateur de la base
$password = "";           // mot de passe de l'administrateur
$dbName = "gestionecole";   // nom de la base
$connexion = mysqli_connect($serverName, $userName, $password, $dbName);
if ($connexion) {
 // Effectuer la requête
 $query = "SELECT numero_etudiant, nom_etudiant, mail, opinion FROM etudiant1 ";
 $result = mysqli_query($connexion, $query);

 // Afficher les lignes du tableau en fonction de la réponse à la requête
 if ($result) {
  if (mysqli_num_rows($result) > 0) {
   while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row["numero_etudiant"]."</td><td>".$row["nom_etudiant"]."</td><td>".$row["mail"]."</td><td>".$row["opinion"]."</td></tr>\n";
   }
  }
 }
 
 // Fermer la connexion
 mysqli_close($connexion);
}
?>
</table> 
</section>

</html>
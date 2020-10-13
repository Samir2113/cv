
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche jeux videos</title>
</head>
<body>
    <h1>Jeux par classés par console</h1>
    <form method="POST">
        <input type="text" name="console">
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>

<?php

if(isset($_POST['console']))
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $requete = $bdd->prepare('SELECT nom, possesseur, console, prix FROM jeux_video WHERE console = ? ORDER BY prix desc ');
    $requete->execute(array($_POST['console']));
    while($donnees = $requete->fetch())
    {
      echo "<p>". $donnees['console'] ." - ". $donnees['nom'] ." : ". $donnees['prix'] ." euros"."</p>";
    };
    
}
?>


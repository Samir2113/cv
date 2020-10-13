<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minichat</title>
</head>
<style>
    form
    {
        text-align:center;
    }
</style>

<body>
    <h1>Minichat</h1>

    <form action="minichat_post.php" method="POST">
        <p>
            <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br/>
            
            <label for="messages">Message:</label> : <input type="text" name="messages" id="messages" /><br/>
            
            
            <button type="submit">Envoyer</button>
        </p>
    </form>



<?php
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=tp;', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, messages FROM minichat ORDER BY Id desc limit 0, 10');

// Affichage de chaque message (avec données protégées par htmlspecialchars)
while($données = $reponse->fetch()){
    echo "<p><strong>".htmlspecialchars($données['pseudo'])."</strong> : ".htmlspecialchars($données['messages'])."</p>";
}

$reponse->closeCursor();

?>

    </body>
</html>
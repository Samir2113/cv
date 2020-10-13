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
</body>

</html>


<?php
$bdd = new PDO('mysql:host=localhost;dbname=tp;', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


$req = $bdd->query('SELECT pseudo, messages FROM minichat ORDER BY Id desc limit 0, 10');
while($données = $req->fetch()){
    echo "<p>".htmlspecialchars($données['pseudo'])." : ".htmlspecialchars($données['messages'])."</p>";
}


?>
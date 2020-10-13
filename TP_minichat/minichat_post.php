<?php

$bdd = new PDO('mysql:host=localhost;dbname=tp;', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (isset($_POST['pseudo'], $_POST['messages'])) {
    $req = $bdd->prepare('INSERT INTO minichat(pseudo, messages) VALUES(:pseudo, :messages)');
    $req->execute(array(
        'pseudo' => $_POST['pseudo'],
        'messages' => $_POST['messages']
    ));
    

   
} 

header('location: minichat.php');

?>
<?php

$bdd = new PDO('mysql:host=localhost:3306;dbname=tp2;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $reponse = $bdd->query('SELECT titre, contenu, DATE_FORMAT(date_creation, "%d/%m/%y %Hh%imin%ss") FROM billets ORDER BY date_creation DESC LIMIT 0, 5');
        while($données = $reponse->fetch()){
            echo "<div>";
            echo "<h3>".$données['titre']. " " .$données['DATE_FORMAT(date_creation, "%d/%m/%y %Hh%imin%ss")']."</h3>";
            echo "<p>".$données['contenu']."<br/><a href='commentaire.php'>Commentaires</a></p><br/>";
            echo "</div>";
        }
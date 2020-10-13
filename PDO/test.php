<?php

$nom = NULL; /*$_POST["nom"];*/

function pdoConnect(){
    $dsn = 'mysql:host=localhost:3306;dbname=foot4';
    $username = 'root'; 
    $password = '';
    return new PDO($dsn, $username, $password);
}



function searchInBdd($nomLocal){

    $base = pdoConnect();
    
    $bdd=$base->prepare("SELECT * FROM joueur WHERE NOM = :nom");
    $bdd->bindParam(":nom", $nomLocal);
    $bdd->execute();
    $result = $bdd->fetchAll();
    return var_dump($result);
}

print_r(searchInBdd($nom));
/*
class Joueur{
    private $db;
    private $nom;
    private $prenom;

    public function __construct(){
        $this->db= new PDO("mysql:host=localhost:3306;dbname=foot4",'root','');
    }
    public function searchByName(string $nom){
        ...
    }
    }
}*/
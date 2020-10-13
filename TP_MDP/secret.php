<?php
$mdpNasa = "kangourou";
$mdpUser = strip_tags($_POST['mdp']);

echo $mdpUser;

if($mdpUser == $mdpNasa){
    echo "Vous avez accès au codes de la NASA!!";
}else{
    echo "Erreur!!";
}
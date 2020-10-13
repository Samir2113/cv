<?php

$tab = array (5,6,9,2,3,1);

$tab2 = array (
    'prenom' => 'Sofiane',
    'nom' => 'Benhamed',
    'age' => '29',
    'ville' => 'Marseille'
);

class Personne {
    private string $nom;
    var $prenom;
    var $adresse;
    function __construct($n, $p, $a) {
        $this->nom=$n;
        $this->prenom=$p;
        $this->adresse=$a;
    }
}

$personne = new Personne('Rinner', 'Teddy', 'Marseille');

/*affiche($tab);*/

//affiche($tab2);

affiche($personne);



function affiche($tableau){
//    $taille = count($tableau);
    foreach($tableau as $lacle => $valeur) {
        echo $lacle . "=" . $valeur . "<br>";
    }
}




<?php

$a = filter_input(INPUT_POST,'a',FILTER_VALIDATE_INT);
$b = filter_input(INPUT_POST,'b',FILTER_VALIDATE_INT);
$somme = $a + $b;
echo "$a + $b = $somme<br>";

factorielle($a);
factorielle($b);

/*echo "<br>Factorielle de $a = ".factrecurs($a)."<br>";
echo "<br>Factorielle de $b = ".factrecurs($b)."<br>";
*/

$arrangement = arrangement($a, $b);

if($a < 0){
    echo "Factorielle de $a = Impossible!<br>";
}else{
    echo "Factorielle de $a = ".factorielle($a)."<br>";
}

if($b < 0){
    echo "Factorielle de $b = Impossible!<br>";
}else{
    echo "Factorielle de $b = ".factorielle($b)."<br>";
}

$arrangement = arrangement($a, $b);

if($arrangement == -1){
    echo "<br>Impossible de calculer l'Arrangement!";
}else{
    echo "<br>Arangement = ".$arrangement;
}





//fonctions:
function factorielle(int $nombre){
    if($nombre === 0){
        return 1;
    }elseif($nombre < 0){
        return -1;
    }else{
        $resultat=1;
        for($i=1; $i <= $nombre; $i++){
            $resultat= $resultat*($i);
        }
        return $resultat;
    }
}

function factrecurs(int $nombre){
       if($nombre === 0){ // condition d'arret 
          return 1;  
        }else{ 
          return $nombre*factrecurs($nombre-1);
        } 
    }  


    function arrangement(int $nombre1, int $nombre2) {
        $x1=factorielle($nombre1);
        $x2=factorielle($nombre1-$nombre2);
        if($x1<=0 || $x2<=0) {
            return -1;
        }
        return factorielle($nombre1)/factorielle($nombre1-$nombre2);
    }
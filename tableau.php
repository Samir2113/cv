<?php

$tableau = array (5,6,9,2,3,1);
$taille = count ($tableau);
echo "La longueur du tableau est de $taille éléments.<br>";
var_dump($tableau);



for($i=0; $i < $taille;$i++){
        for($j=$i+1;$j<$taille;$j++){
            if($tableau[$i] > $tableau[$j]){
                $temporaire=$tableau[$j];
                $tableau[$j]=$tableau[$i];
                $tableau[$i]=$temporaire;
            }
        }
    }


var_dump ($tableau);    




<pre>
<?php
/***"<pre></pre>" donne un affichage plus clair et lisible*/

$tab = [5, 'Marie', 9, ['nom'=>'Le Sourne', 'Prenom'=> 'jean', [62950]]];

toutAfficher($tab);

function toutAfficher($element){
    echo "Type de la variable tab:".gettype($element)."\n";
        foreach($element as $cle => $valeur){
            if(is_array($valeur)){ /*
            foreach($valeur as $contenu => $newValeur){
                echo "\n\n $contenu => $newValeur ";
            }*/
            toutAfficher($valeur);
        }else{
            echo " $cle => $valeur \n";
        }
    }   
}
?>
</pre>


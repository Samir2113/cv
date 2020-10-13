<?php
$noteEntree = null;

while($noteEntree !== "fin"){
    $noteEntree = (int)readline('Veuillez rentrer une note ou taper fin: ');
    if($noteEntree < 0 || $noteEntree > 20){
        echo "Entrer une note comprise entre 0 et 20!"; 
    } else{
        $notes[] = $noteEntree;
        return $notes;
    }
    foreach($notes as $index => $note){
        echo "-$note/20 \n";
    }
}

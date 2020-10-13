
<?php
function parcourLigne(Array $tab,int $prof1, int $prof2){
    if ($prof1<0) {
        return $tab;
    } else {
        $tab[parcourColonne([$prof1],$prof2)]=$prof1;
        return parcourLigne($tab,$prof1 - 1, 5);
    }

}

function parcourColonne(array $tab2,$prof1,int $prof2){
    $tab2=[];
    if ($prof2<0) {
        return $tab2;
    } else {
        $tab2[$prof2]=$prof2;
        return parcourColonne($tab2,$prof2 - 1, 5);
    }

}
$tableau = [];
var_dump(parcourLigne($tableau, 5,5));

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>Quelques exemples PHP (sans objet ni typage explicite)</title>
</head>
<body>
<?php
    /* ceci est un commentaire

       ci-dessous une variable
       utilisée sans avoir été déclarée
    */
    $nom="dupont";

    // un affichage écran (et une autre forme de commentaire)
    print "nom=$nom<br>";

    // un tableau avec des éléments de type différent
    $tableau=array("un","deux",3,4);

    // son nombre d'éléments
    $n=count($tableau);
    print "Nombre d'éléments = " . $n;

    /* une boucle pour parcourir le tableau
       les variables peuvent être
       mentionnées directement dans 
       une chaine de caractères
    */
    for($i=0;$i<$n;$i++){
        print"tableau[$i]=$tableau[$i]<br>";
    }

    // initialisation de 2 variables distinctes avec le contenu d'un tableau
    list($chaine1,$chaine2)=array("chaine1","chaine2");

    // concaténation des 2 chaînes
    $chaine3=$chaine1.$chaine2;

    // affichage du résultat
    print"[$chaine1,$chaine2,$chaine3]<br>";
    
    // utilisation d'une fonction d'affichage
    affiche($chaine1);

    /* le type d'une variable peut être connu
       la fonction "affichetype" décrite plus bas
       détecte le type
    */
    afficheType("n",$n);
    afficheType("chaine1",$chaine1);
    afficheType("tableau",$tableau);

    /* 
        le type d'une variable peut changer en cours d'exécution
        si celui-ci n'a pas été initialement défini
    */
    $n="a changé";
    afficheType("n",$n);

    // une fonction peut rendre un résultat
    $res1=f1(4);
    print"res1=$res1<br>";

    // une fonction peut rendre un tableau de valeurs
    list($res1,$res2,$res3)=f2();
    print"(res1,res2,res3)=[$res1,$res2,$res3]<br>";

    // on aurait pu récupérer ces valeurs dans un autre tableau
    $t=f2();
    for($i=0;$i<count($t);$i++){
        print"t[$i]=$t[$i]<br>";
    }

    // des tests ... 
    for($i=0;$i<count($t);$i++){
        // n'affiche que les chaînes
        if(getType($t[$i])==="string"){
            print"t[$i]=$t[$i]<br>";
        }
    }

    // opérateurs de comparaison == et ===, la différence
    if("2"==2){
        print"avec l'opérateur ==, la chaîne 2 est égale à l'entier 2<br>";
    }
    else{
        print"avec l'opérateur ==, la chaîne 2 n'est pas égale à l'entier 2<br>";
    }
    if("2"===2){
        print"avec l'opérateur ===, la chaîne 2 est égale à l'entier 2<br>";
    }
    else{
        print"avec l'opérateur ===, la chaîne 2 n'est pas égale à l'entier 2<br>";
    }

    // d'autres tests
    for($i=0;$i<count($t);$i++){
        // n'affiche que les entiers >10
        if(getType($t[$i])==="integer"and$t[$i]>10){
            print"t[$i]=$t[$i]<br>";
        }
    }

    // une boucle while
    $t=[8, 5, 0, -2, 3, 4];
    $i=0;
    $somme=0;
    while($i<count($t)and$t[$i]>0){
        print"t[$i]=$t[$i]<br>";
        $somme+=$t[$i];
        $i++;
    }
    print"somme=$somme<br>";

    // Les fonctions que nous avons utilisées...
    //----------------------------------
    function affiche($chaine){
        // affiche $chaine
        print"chaine=$chaine<br>";
    }
    //----------------------------------

    function afficheType($name,$variable){
    // affiche le type de $variable
        print "type[variable $" . $name . "]=".getType($variable)."<br>";
    }

    //----------------------------------
    function f1($param){
    // ajoute 10 à $param
        return $param+10;
    }

    //----------------------------------
    function f2(){
        // renvoie 3 valeurs
        return array("un",0,100);
    }
 ?>
</body>
</html>
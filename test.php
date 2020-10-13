<?php

function premierDegres(){
    if(!(filter_input(INPUT_POST,"a",FILTER_VALIDATE_FLOAT) and filter_input(INPUT_POST,"b",FILTER_VALIDATE_FLOAT))){
        echo 'erreur!!!';
    }
    else{
    $a=$_POST['a'];
    $b=$_POST['b'];
    $x=(-$b)/($a);
    print($x);
        
    };

}

premierDegres();

$tableau = array('pierre', 'sofiane','jean');
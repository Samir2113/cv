<pre>
<?php


    $tab=[];
    for($i=0; $i<5; $i++){
        for($j=0; $j<5; $j++){
            $tab[$i][$j]=$i*$j;
        }
    }
    print_r($tab);


?>
</pre>
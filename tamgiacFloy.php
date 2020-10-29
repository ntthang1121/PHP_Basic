<?php
    $n = 5;
    $count = 1;
    for($i = $n;$i>0;$i--){
        for($j = $i;$j<$n+1;$j++){
            print_r($count);
            $count++;
        }
        echo "<br>";
    }
?>
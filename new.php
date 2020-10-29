<?php
    $n = 5;
    echo "n = " . $n . "<br>";  
    $count = 1;
    for($i = $n;$i>0;$i++){
        for($j = $i;$j<$n;$j++){
            print_r("%4s",$count);
            $count++;

        }
    }
?>
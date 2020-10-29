<?php
    $n = 3;
    $i = 1;
    $sum = 0;
    while($i <= $n){
        $kq = 1;
        $j = 1;
        while($j <= $i){
            $kq = $kq * $j;
            $j++;
        }
        $sum += $kq;
        $i++;
    }

    echo $sum;



?>
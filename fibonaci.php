<?php

    function fibonaci($n){
        $f0 = 0;
        $f1 = 1;
        $fn = 1;
        if($n < 0){
            return -1;
        }
        else if($n == 0 || $n == 1){
            return $fn;
        }
        else{
            for($i = 2; $i< $n;$i++){
                $f0 = $f1;
                $f1 = $i;
                $fn = $f0 + $f1;
            }
        }
        return $fn;

    }
    echo "10 so fibonaci dau tien: ";
    for($i = 0; $i<10; $i++){
        echo fibonaci($i)." ";
    }






?>
<?php

    function checkSNT($n){
        if($n == 2 || $n == 1){
            return $n;
        }
        for($i =2;$i<$n;$i++){
            if($n % $i == 0){
               return false;
            }
        }
        return true;
    }
    echo "Cac so nguyen to nho hon 50 la : ";
    for($i = 1;$i<50;$i++){
        if(checkSNT($i)){
            echo $i." ";
        }
    }










?>
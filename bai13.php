<?php
    $num = 7;
    $i = 2;
    $temp;
    while($i < $num){
        if($num % $i == 0){
            $temp = 0;
        break;
        }
        else{
            $temp = 1;
        }
        $i++;
    }
    if($temp == 0){
        echo "k phai snt";

    }
    else{
        echo "phai";
    }





?>
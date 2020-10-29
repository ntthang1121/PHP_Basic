<?php
    $n = 12;
    $list = "";
    
    for($i = 2; $i < $n; $i++){
        $temp = true;
        for($j = 2; $j< $i;$j++){
            if($i % $j != 0){
                continue;
            }  
            $temp = false;         
        }
        if($temp){
            $list .= "$i, ";
        }
    }
    echo $list;




?>
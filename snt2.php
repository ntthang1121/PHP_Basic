<?php
    function checkSNT($n){
        if($n <2 ) return false;
        for($i = 2;$i< sqrt($n); $i++){
            if($n % $i == 0){
                return false;
            }
        }
        return true;
    }
    $n = 50;
    $dem = 0;
    $i = 2;
   while($dem<$n){
        if(checkSNT($i)){
            echo $i." ";
            $dem++;
        }
        $i++;    
    }






?>
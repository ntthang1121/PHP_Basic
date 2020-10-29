<?php
    function ucln($a,$b){
        if($b == 0){
            return $a;
        }
        return ucln($b, $a%$b);  
    }
    function bcnn($a,$b){
        return ($a * $b/ucln($a,$b));
    }
    $a = 15;
    $b = 40;
    echo "uoc chung lon nhat la : ". ucln($a,$b). '<br>';
    echo "boi chung nho nhat la : ". bcnn($a,$b);




?>
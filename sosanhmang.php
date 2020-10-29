<?php

    function so_sanh_keys($key1, $key2){
        if($key1 === $key2){
            return 0;
            
        }
        return ($key1 > $key2) ? 1 : -1;
    }
    function so_sanh_value($val1, $val2){
        if($val1 === $val2){
            return 0;
            
        }
        return ($val1 > $val2) ? 1 : -1;
    }
    function so_sanh_mang($arr1, $arr2){
        return array_diff_uassoc($arr1['c'],$arr2['c'],"so_sanh_keys");
    }
    $color1=array('a'=>'White','b'=>'Red','c'=>array('a'=>'Green','b'=>'Blue','c'=>'Yellow'));  
	$color2=array('a'=>'White','b'=>'Red','c'=>array('a'=>'White','b'=>'Red','c'=>'Yellow'));  
    print_r(so_sanh_mang($color1, $color2));

?>

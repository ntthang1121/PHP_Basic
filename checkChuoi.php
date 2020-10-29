<?php
    function check_chuoi($arr){
        return  array_sum(array_map('is_string', $arr))==count($arr) ;
    }
    $arr1 = array('PHP', 2, 'Python');  
    var_dump (check_chuoi($arr1));





?>
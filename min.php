<?php
    function tim_min(Array $arr){
        return min(array_diff(array_map('intval', $arr), array(0)));
    }
    $arr = array(1,2,12,12,14,-1,-2,-5);
    print_r(tim_min($arr));
    


?>
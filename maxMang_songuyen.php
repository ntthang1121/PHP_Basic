<?php
    $arr1 = array(1,2,3,4,5,9);
    $arr2 = array(1,2,3,10,5,9);
    $arr3 = array(1,2,3,4,99,9);

    $max = max(max($arr1), max($arr2), max($arr3));
    print_r ($max);

?>
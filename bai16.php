<?php
    $a = [1,2,3,4,5];
    $position = 1;
    $values = 100;

    array_splice($a, $position,1, $values);
    echo '<pre>';
    print_r($a);
    echo '</pre>'



?>
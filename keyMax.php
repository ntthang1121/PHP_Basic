<?php
    $arr = array('value1' => 3021,  
    'value2' => 2365,  
    'value3' => 5215,  
    'value4' => 5214,  
    'value5' => 2145
    );
    arsort($arr);
    $key_max = key($arr);
    echo $key_max;

?>
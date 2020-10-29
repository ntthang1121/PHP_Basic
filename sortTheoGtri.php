<?php
    $arr = array('diem1' => '5', 'diem2' => '1', 'diem3' => '10');
    asort($arr, SORT_STRING | SORT_NATURAL | SORT_FLAG_CASE);
    print_r ($arr);


?>
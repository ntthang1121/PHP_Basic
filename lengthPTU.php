<?php
    $arr = array('thang', 'thao', 'vu', 'hieu');
    $temp = array_map('strlen', $arr);
    echo min($temp)."<br>";
    echo max($temp);





?>
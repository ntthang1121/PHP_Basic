<?php
    // sap xep theo thứ tự tự nhiên , k phân biệt hoa thường
    $arr = array("color1", "color20", "color3", "color2"  );
    sort($arr, SORT_NATURAL | SORT_FLAG_CASE); //gan gtri neu SORT_NATURAL = null thi se lay gtri sau.
    foreach($arr as $key => $value){
        echo $key. "=" .$value."<br>";
    }

?>
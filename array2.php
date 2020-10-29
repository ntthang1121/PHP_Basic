<?php
    $arr = " 10,12,13,14,15,17,34,67,89,23,11";
    $arr_temp = explode(",", $arr);
    $dem = count($arr_temp);
    $sum = 0;
    foreach($arr_temp as $temp){
        $sum += $temp;
    }
    $result = $sum / $dem;
    echo "Gia tri trung binh cua mang la : ".$result."<br>";
    sort($arr_temp);
    echo "5 so nho nhat: ";
    
    //print_r($arr_temp)."<br>";
    for($i = 0;$i<5;$i++){
        echo $arr_temp[$i]." ";
    }
    echo "5 so lon nhat: ";
    for($i = $dem - 5;$i< $dem;$i++){
        echo $arr_temp[$i]." " ;
    }



?>
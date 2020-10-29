<?php
    $ki_tu_can_dem = 'z';
    $string = "thang very handsome";
    $dem = 0;
    for($i = 0;$i<strlen($string);$i++){
        if(substr($string,$i,1)=== $ki_tu_can_dem){
            $dem+=1;
        }
       
    }

    echo $ki_tu_can_dem ."xuat hien". $dem."lan";

?>
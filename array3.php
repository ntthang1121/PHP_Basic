<?php
    $arr1 = array (array(2,4), array(4,6));
    $arr2 = array('name', 'thang');
    function hop_mang($x, $y){
        $temp = array();
        $temp[] = $x;
        if(is_scalar($y)){ // check xem $y có phải biến vô hướng k: mảng, obj, tài nguyên thì k phải.
            $temp[] = $y;
        }
        else{
            foreach($y as $a => $value){
                $temp[] = $value;
            }
        }
        return $temp;
    }
    echo '<pre>';
    print_r (array_map('hop_mang',$arr1,$arr2));
    echo '</pre>';





?>
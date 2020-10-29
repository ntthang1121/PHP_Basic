<?php
    $firstMoney = 15000;
    $secondMoney = 12000;
    $thirdMoney = 90000;
    $fourMoney = 12/100;
    $way = 100;
    $money = 0 ;

    if($way <= 1){
        $money = 1 * $firstMoney;
    }
    else if($way>1 && $way<5){
        $money = 1* $firstMoney + $secondMoney * ($way-1);
    }
    else if($way<=140 ){
        $money = 1* $firstMoney + $secondMoney * 4 + $thirdMoney * ($way-5);
    }
    else if($way > 140){
        $money =  1* $firstMoney + $secondMoney * 4 + $thirdMoney * ($way-5) * $fourMoney;
    }
    $money = number_format($money);
    echo "tien phai tra" . $money;




?>
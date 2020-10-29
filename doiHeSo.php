<?php

    function convertNumber($n, $hecoso){
        if($n < 0 || $hecoso < 2 || $hecoso > 16){
            return "";
        }
        $string = "";
        $result = 0;
        $temp = $n;

        while ($temp > 0) {
            if ($hecoso > 10) {
                $result = $temp % $hecoso;
                if ($result >= 10) {
                    $string = $string . chr (55+ $result);
                } else {
                    $string = $string . $result;
                }
            } else {
                $string = $string . ($temp % $hecoso);
            }
            $temp = floor($temp / $hecoso);
        }
        return strrev($string);
    }
    $n = 30;
    echo ("So " . $n . " trong he co so 2 = " . convertNumber($n, 2) . "<br>");
    echo ("So " . $n . " trong he co so 16 = " . convertNumber($n, 16));





?>
<?php
    function xuli($value, $key){
        echo "$key : $value"."<br>";
    }

    $arr ='{"name":"thang", "age" : "21",
      "contry":{
        "contry1": "dai loc",
        "contry2" : "duy xuyen"
      }
    }';
    
    $j = json_decode($arr, true);
    array_walk_recursive($j,"xuli"); //chay tren moi ptu mang
    


?>
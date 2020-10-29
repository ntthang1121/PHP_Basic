<?php

    function search_index($array, $search){
        reset($array);
        while(list($key, $value) = each($array)){
            if(preg_match("/$search/i", $value)){
                echo $search." được tìm thấy ở keys: ".$key;
            }
            else{
                echo $search." k được tìm thấy ở keys: ".$key;
            }
        }
    
    
    
    }
    $exercises = array("part1"=>"PHP array", "part2"=>"PHP String", "part3"=>"PHP Math");  
    echo search_index($exercises, "PHP array");

















    // $exercises = array("part1"=>"PHP array", "part2"=>"PHP String", "part3"=>"PHP Math");  
    // echo array_search('PHP array', $exercises); //tra ke key cua  no nếu true
    

?>
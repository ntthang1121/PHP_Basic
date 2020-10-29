<?php
    function chuyen_doi($input , $b){
        $case = $b;
        $arr = array();
        if(!is_array($input)){
            return $arr;
        }
        foreach($input as $key => $value){
            if(is_array($value)){
                $arr[$key] = chuyen_doi($value, $case);
                continue;
            }
            $arr[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value) );
        }
        return $arr;
    }

    $mang_ban_dau = array('name'=>'thang', 'age'=>'21');
    print_r($mang_ban_dau)."<br>";
    $mang_thuong = chuyen_doi($mang_ban_dau, CASE_LOWER);
    print_r($mang_thuong);
    $mang_hoa = chuyen_doi($mang_ban_dau, CASE_UPPER);
    print_r($mang_hoa);






?>
<?php
    // check chuoi co trong chuoi k
    $pattern = '/[^\w]tap\s/';
    $string = "hoc tap hoc tap";
    echo preg_match($pattern,$string);

    // check chuoi xuat hien bn lan trong chuoi
    $pattern = '/tap/';
    $string = "hoc tap hoc tap";
    echo preg_match_all($pattern,$string);

    //xoa tu cuoi cung trong chuoi
    $string = "thang dep trai";
    $pattern = 
    array_multisort
?>
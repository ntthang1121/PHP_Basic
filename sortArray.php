<?php
    echo "sap xep tan dan theo value"."<br>";
    $arr1 = array ('Age_Thang'=> '21', 'Age_Vu'=> '24', 'Age_thao'=> '18');
    asort($arr1);//sap xep theo value
    foreach($arr1 as $a=>$a_value){
        echo "Tuoi cua". $a." la : ".$a_value."<br>"; 
    }
    echo "------------------------------"."<br>";
    echo "sap xep tang dan theo key"."<br>";
    $arr2 = array('Age_Thang'=> '21', 'Age_Vu'=> '24', 'Age_thao'=> '18');
    ksort($arr2); //sap xep theo key
    foreach($arr2 as $b=>$b_value){
        echo "Tuoi cua". $b." la : ".$b_value."<br>"; 
    }
    echo "------------------------------"."<br>";
    echo "sap xep giam dan theo value"."<br>";
    $arr3 = array('Age_Thang'=> '21', 'Age_Vu'=> '24', 'Age_thao'=> '18');
    arsort($arr3); //sap xep giam dan theo key
    foreach($arr3 as $c=>$c_value){
        echo "Tuoi cua". $c." la : ".$c_value."<br>"; 
    }
    echo "------------------------------"."<br>";
    echo "sap xep giam dan theo key"."<br>";
    $arr4 = array('Age_Thang'=> '21', 'Age_Vu'=> '24', 'Age_thao'=> '18');
    krsort($arr4); //sap xep giam dan theo key
    foreach($arr4 as $d=>$d_value){
        echo "Tuoi cua". $d." la : ".$d_value."<br>"; 
    }
?>
<?php
    $file = './test2.csv';
    $dele = unlink($file);
    if(!$dele){
        throw new Exception ("Cannot delete $file");

    }
    else{
        echo "Compelete Delete".$file;
    }







?>
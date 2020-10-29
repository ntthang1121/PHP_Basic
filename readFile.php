<?php
    //cach 1
    $file = './test.txt';
    $read = file_get_contents($file);
    //print_r ($read);

    //cach 2
    $a = fopen($file, 'r');
    $b = fread ($a, filesize($file));
    fclose($a);
    
    //--------------------------------

    $thang = './test2.csv';
    $th = fopen($thang, 'r');
    $contents = fgetcsv($th);
    //print_r ($contents);

    //-----------------------
    //dowload file

    $haha = './test.txt';
    if(file_exists($haha)){
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($haha).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($haha));
        readfile($file);
        exit;
    }

?>
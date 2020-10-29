<?php
    //su dung  file_put_contents
    $path = './profile.txt';
    $contents = ' nhung chua co nguoi yeu ';
    file_put_contents($path,$contents);

    //---------------------------------------
    // su dung fwrite
    $contents .= ' boi vi chua muon yeu';
    $read = fopen('$path', 'w');
    fwrite($read, $contents);
    fclose($read);
    print_r(file($path));



?>
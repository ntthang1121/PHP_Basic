<?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $now = new DateTime();
    //print_r($now);

    echo($now->format('d - m - Y h:m:i')); // show theo format

    //Xác định thời gian cách đây 29 ngày
    $interval = new DateInterval('P29D');
    echo ($now -> sub($interval) -> format('d - m - Y h:m:i'));

    // Tạo biến $date với mốc thời gian y = 2020 m = 4 d = 29
    $date = new DateTime();
    $date -> setDate(2020,4,29);
    print_r ($date);

    // Convert string to time
    echo date('y/m/d', strtotime('2020 4 29'));
    
?>
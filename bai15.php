<?php
    $profile[] = [
        'name' => 'Thang',
        'age' => '21',
        'job' => 'student'
    ];
    
    array_unshift($profile,[
        'name' => 'vu',
        'age' => '21',
        'job' => 'cave'
    ]);
    unset($profile[0]);
    //$profile[0]['age'] = 25;
    echo '<pre>';
    print_r($profile);
    echo '</pre>'

?>
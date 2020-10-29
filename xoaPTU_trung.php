<?php

    $arr = array(0=>-10, 1=>7, 3=> -7, 4=>-7, 5=>6, 6=>-10);
    $result = array_keys(array_flip($arr));//array_key: lấy tất cả keys,array_flip: lật tất các keys có gtri liên quan với nhau
    print_r($result);

?>
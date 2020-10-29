<?php
    $products = [ 'name' => 'Bphone-2019','price' => 1000000,
    ];

    // echo ('<pre>');
    // print_r(reset($products));
    // echo ('</pre>');

    $key = array_search('Bphone-2019', $products);
    echo $key;




?>
<?php

    $color = array('red', 'blue', 'yellow');
    foreach($color as $a){
        echo $a.'<br>';
    }
    sort($color);
    echo '<ul>';
    foreach($color as $c){
        echo "<li>$c</li>"; 
    }
    echo '</ul>';

    // xoa 1 ptu trong mang.
   var_dump($color);
   unset($color[0]);
   $color = array_values($color);
   var_dump($color);

   //tra ve ptu dau tien cua mang
    echo reset($color);
    
    //chen phan tu vao mang
    $ptu_can_chen = 'pink';
    array_splice($color, 1, 0, $ptu_can_chen);
    var_dump( $color);

?>
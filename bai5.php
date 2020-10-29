<?php
    $soA = "";
    $soB = "";
    $soC = "";

    if(isset($_POST['soA'])){
        $soA = ($_POST['soA']);
    }
    if(isset($_POST['soB'])){
        $soB = ($_POST['soB']);
    }
    if(isset($_POST['soC'])){
        $soC = ($_POST['soC']);
    }
    // function check(array $so){

    //     $kq = str_split($so);
    //     for($i = 0; $i < $kq.length;$i++){
    //         if($kq[$i]>=0 && $kq[$i]<=9){
    //             return true;
    //         }
    //         else{
    //             return false;
    //         }
    //     }
    // }
    function Tinh($a,$b,$c){
        
        if($a == 0){
            if($b == 0){
                echo "pt vo nghiem";
            }
            else{
                echo "pt co 1 nghiem : " . -$c/$b;
            }
            return;
    
        }
           $delta = $b * $b - 4 * $a * $c;
           $x1 = "";
           $x2 = "";
           if($delta == 0){
               $x1 = -$b/(2* $a);
               echo "pt co 1 nghiem kep la " . $x1;
           }
           else if($delta < 0){
               echo "pt vo nghiem";
           }
           else if($delta > 0){
               $x1 = -$b + sqrt($delta)/(2*$a);
               $x2 = -$b - sqrt($delta)/(2*$a);
               echo "PT co 2 nghiem phan biet: " . $x1 . "va" .$x2  ;
           }
    }
    

?>
<br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method = "POST">
    <table>
        <tr>
         <td>Hệ số bậc 2, a</td>
         <td><input type="text" name="heso_a" value="<?=$soA?>" /></td>
        </tr>
        <tr>
         <td>Hệ số bậc 1, b</td>
           <td><input type="text" name="heso_b" value="<?=$soB?>" /></td>
        </tr>
        <tr>
         <td>Hệ số tự do, c</td>
           <td><input type="text" name="heso_c" value="<?=$soC?>" /></td>
        </tr>
        <tr>
           <td></td>
          <td><input type="submit" value="Kết quả"></td>
        </tr>
    </table>
    </form>
</body>
</html>


<?php
    // if(check($GLOBALS['$soA']) == true){
    //     if(check($GLOBALS['$soB']) == true){
    //         if(check($GLOBALS['$soC']) == true){
    //             Tinh($GLOBALS['$soA'], $GLOBALS['$soB'], $GLOBALS['$soC']);
    //         }
    //     }
    // }
    if (is_numeric ( $GLOBALS ['soA'] ) && is_numeric ( $GLOBALS ['soB'] ) 
        && is_numeric ( $GLOBALS ['soC'] )) {
    Tinh ( $GLOBALS ['soA'], $GLOBALS ['soB'], $GLOBALS ['soC'] );
} else {
    echo ("Giá trị input không hợp lệ!");
}

?>
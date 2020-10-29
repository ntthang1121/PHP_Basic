<?php

    (int)$soA = "";

    // if(isset($_POST['soA'])){
    //     $soA = $_POST['soA'];
    // }

    function factorial($n){
        $kq = 1;
        if($n == 0 || $n == 1){
            return $kq;
        }
        else{
            for($i = 1;$i<=$n; $i++){
                $kq = $kq * $i;
            }
        }
        return $kq;
    }
    //echo "giai thua : " . factorial($soA);

?>




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
         <td>Nhap so giai thua</td>
         <td><input type="text" name="giaithua" value="<?=$soA?>" /></td>
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
   if(is_numeric( $GLOBALS['soA'])){
      echo "giai thua la " . factorial($GLOBALS['soA']);
   }
   else{
       echo "Loi";
   }


?> 
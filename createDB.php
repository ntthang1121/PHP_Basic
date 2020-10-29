<?php
    function connectDB($severname, $username, $password, $dbname){
        $conn = new mysqli($severname, $username, $password, $dbname);
        return $conn;
    }

    if(connectDB('localhost', 'root', '', 'Database_Basic')){
        echo "ket noi thanh cong";
    }
    else{
        echo "loi";
    }


    //$conn = mysqli_connect('localhost', 'root', '', 'Database_Basic') or die ('Ket noi fail');
    

?>
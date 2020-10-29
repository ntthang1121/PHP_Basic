<?php
    function connectDB($severname, $username, $password, $dbname){
        $conn = new mysqli($severname, $username, $password, $dbname);
        return $conn;
    }

    // if(connectDB('localhost', 'root', '', 'Database_Basic')){
    //     echo "ket noi thanh cong";
    // }
    // else{
    //     echo "loi";
    // }

    $DB = connectDB('localhost', 'root', '', 'database_basic');
    // $sql = "CREATE TABLE Test(id Int(5) UNSIGNED AUTO_INCREMENT primary key, 
    // name varchar(20) not null, country varchar(10) not null)";

    // if($DB->query($sql)){
    //     echo "Create success";
    // }
    // else{
    //     echo "Error";
    // }
    

    // $insert = "INSERT INTO Test (name, country) values ('thang', 'viet nam'), ('thao', 'laos')";
    // $inserted = $DB -> query($insert);

    // if($insert){
    //     echo "Insert success";
    // }
    // else{
    //     echo "Insert Error";
    // }

    // $update = "UPDATE Test SET name = 'hieu' where id = '2'";
    // $updated = $DB -> query($update);
    // if($updated){
    //     echo "Update success";
    // }
    // else{
    //     echo "Error";
    // }

    // $delete = "DELETE from Test where id = '4'";
    // $deleted = $DB -> query($delete);
    // if($deleted){
    //     echo "delete success";
    // }
    // else{
    //     echo "Error";
    // }
    // mysqli_close($DB);

    $select = "SELECT * from test";
    $selected = $DB -> query($select);
    $result = [];
    if($selected->num_rows > 0){
        while($record = $selected->fetch_object()){
            $result[] = $record;
        }
    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Danh sách bài viết</h2>
    <ul>
        <?php if(!empty($result)): ?>
            <?php foreach($result as $data):  ?>
                <li><?php echo ($data -> name." ".$data -> country) ?></li>
            <?php endforeach ?>
        <?php else: ?>
            <li>Không có bản ghi nào</li>
        <?php endif ?>  
    </ul>
    
</body>
</html>
<?php
    $path = './DsSV.txt';
    $students = file($path);

    if(isset($_POST['submit'])){
        $name = $_POST['txtName'];
        $file = fopen($path, 'a');
        fwrite($file, "\n".$name);
        fclose($file);
        header('location:'.$_SERVER['HTTP_REFERER'] );
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = 'POST'>
        <div>
            <h2>Thêm sinh viên</h2>
            <label for="">Họ Tên: </label>
            <input type="text" name="txtName"></input>
            <input type="submit" name="submit" value="Thêm"></input>
        </div>
        <table>
            <tr>
                <td><h2>Danh sách sinh viên</h2></td>
            </tr>
            <?php foreach($students as $student): ?>
            <tr>
                <td><?php echo ($student) ?></td>
            </tr>
            <?php endforeach ?>
        </table>
    
    
    
    </form>
</body>
</html>
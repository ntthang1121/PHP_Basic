<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = 'POST'>
        <table>
            <h2>Nhập thông tin</h2>
            <tr>
                <td>Nhập tên đăng nhập</td>
                <td><input type="text" name ="txtName"></input></td>
            </tr>
            <tr>
                <td>Nhập mật khẩu</td>
                <td><input type="password" name ="txtPass"></input></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name='submit' values = 'Login'>
                </td>
            </tr>
        </table>
    </form>
    <?php
    $tk = $_POST['txtName'];
    //$mk = $_POST['txtPass'];
    if($tk != " "){
        echo 'thanh cong';
    }



?>
</body>
</html





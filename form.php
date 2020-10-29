<?php

function checkEmpty($input)
{
    if (empty($input) || $input == null) {
        return true;
    }
}

function checkNumber($input)
{
    if (is_numeric($input)) {
        return true;
    }
}
function checkPhone($input)
{
    if(!is_numeric($input)){
        return false;
    }
    if(strlen($input) > 13 || strlen($input) < 10){
        return false;
    }
    
}

function checkEmail($input){
    return filter_var($input, FILTER_VALIDATE_EMAIL);
}

    if(isset($_POST['submit'])){
       
        $errors = [];
        $name = $_POST['txtName'];
        $SDT = $_POST['txtSDT'];
        $email = $_POST['txtEmail'];

        if(checkEmpty($name)){
            $errors['txtName'] = ['Ten rong'];
        };
        if(checkEmpty($SDT)){
            $errors['txtSDT'] = ['SDT rong'];
        };
        if(checkEmpty($email)){
            $errors['txtEmail'] = ['Email rong'];
        };
        
        if(!checkPhone($SDT)){
            $errors['txtSDT'][] = "SDT sai";
        };

        if(!checkEmail($email)){
            $errors['txtEmail'][] = "Email sai";   
        }

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
    <form action = "<?php echo $_SERVER['PHP_SELF'] ?>" method = 'POST'>
        <?php if(isset($errors)): ?>
            <?php foreach($errors as $error): ?>
            <?php print_r($error) ?>
            <?php endforeach ?>
        <?php endif ?>
        <table>
            <tr>
                <td>Nhập tên </td>
                <td>
                    <input type='text' name = 'txtName'></input>
                </td>
            </tr>
            <tr>
                <td>Nhập SĐT </td>
                <td>
                    <input type='text' name = 'txtSDT'></input>
                </td>
            </tr>
            <tr>
                <td>Nhập Email </td>
                <td>
                    <input type='Email' name = 'txtEmail'></input>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type='submit' name = 'submit' value = 'Lưu'></input>
                </td>
            </tr>
        </table>
    
    
    </form>
</body>
</html>

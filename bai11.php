<?php
    $firstNumber = 4;
    $secondNumber = 9;
    $operator = "*";
    switch($operator){
        case '+':
            $result = $firstNumber + $secondNumber;
            break;
        case '-':
            $result = $firstNumber - $secondNumber;
            break;
        case '*':
            $result = $firstNumber * $secondNumber;
        break;
        case '/':
            $result = $firstNumber / $secondNumber;
        break;
        default:
            echo "loi";
    break;
    }

    echo $result;



?>
<!DOCTYPE html>
<html>
<head>
    <title>15</title>
</head>
<body>
<form method="post">
    <table>
        <tr>
            <td><span>A:</span></td>
            <td><input type="text" name="a"></td>
        </tr>
        <tr>
            <td><span>B:</span></td>
            <td><input type="text" name="b"></td>
        </tr>
        <tr>
            <td><span>Operand:</span></td>
            <td>
                <input type="radio" name="operand" value="+"><span>+</span>
                <input type="radio" name="operand" value="-"><span>-</span>
                <input type="radio" name="operand" value="*"><span>*</span>
                <input type="radio" name="operand" value="/"><span>/</span>
                <input type="radio" name="operand" value="%"><span>%</span>
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Calculate"></td>
            <td></td>
        </tr>
    </table>
</form>
<br>
</body>
</html>


<?php
/*
 * 15. Написать калькулятор.
 * Переменная $a = изменяемое число.
 * Переменная $b = изменяемое число.
 * Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
 * На экран выводить результат в зависимости от значений этих переменных.
 * Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.
*/
switch ($_POST['operand']){

    case '+':
        $result = bcadd($_POST['a'], $_POST['b'], 4);
        echo "RESULT: " . $result;
        break;

    case '-':
        $result = bcsub($_POST['a'], $_POST['b'], 4);
        echo "RESULT: " . $result;
        break;

    case '/':
        $result = bcdiv($_POST['a'], $_POST['b'], 4);
        if ($result === null) {
            echo "ОШИБКА: на 0 делить нельзя";
        }
        else {
            echo "RESULT: " . $result;
        }
        break;

    case '*':
        $result = bcmul($_POST['a'], $_POST['b'],4 );
        echo "RESULT: " . $result;
        break;

    case '%':
        $result = bcmod($_POST['a'], $_POST['b']);
        if ($result === null) {
            echo "ОШИБКА: на 0 делить нельзя";
        }
        else {
            echo "RESULT: " . $result;
        }
        break;
}
?>
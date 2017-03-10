<html>
<body>
<form method='post'>
    <span>Enter number: </span><input type="number" name="number">
    <input type="submit" value="Send">
</form>
</body>
</html>


<?php
/**
 * Created by PhpStorm.
 * User: lvovych
 * Date: 10/3/17
 * Time: 16:50
 */

//Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.


for ($i = 0, $res = 0; $i <= iconv_strlen($_POST['number']); $i++){
    $res += $_POST['number'][$i];
    }
echo " Sum of digits of number = {$res}";
?>


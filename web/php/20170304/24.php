<?php
/**
 * Created by PhpStorm.
 * User: lvovych
 * Date: 10/3/17
 * Time: 17:05
 */

//Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза.


if (isset($_POST['digit']) && isset($_POST['number'])) {
    if (is_numeric($_POST['digit']) && iconv_strlen($_POST['digit']) === 1) {
        $res = 0;
        $number = str_split($_POST['number']);
        $i = 0;
        $count = count($number);
        while ($i <= $count) {
            if ($number[$i] === $_POST['digit']) {
                $res++;
            }
            $i++;
        }
        $res = "<span>The digit {$_POST['digit']} is repeated {$res} times in number {$_POST['number']}</span>";
    }
    else {
        print_r ($html);
        echo '<br><span>Please enter corect digit</span>';
    }

}
else {
    print_r ($html);
}

?>

<html>
<body>
<form method='post'>
    <span>Enter one digit: </span><input type="text" name="digit"><br>
    <span>Random number: </span><input type="text" name="number" value="<?php echo random_int(0, PHP_INT_MAX);?>" size="30"><br>
    <input type="submit" value="Send">
</form>
    <p><?php echo $res; ?></p>

</body>
</html>

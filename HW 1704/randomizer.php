<?php
$randomNum = fopen('example.txt', 'w+');
$i=0;
while(++$i < 10){
    $num = mt_rand(1, 1000);
    fwrite($randomNum, "$num " );
}
fclose($randomNum);

$RandomNum2 = fopen('example.txt', 'r');
$strRandomNum = 0;
if ($RandomNum2) {
    while (($numbers = fgets($RandomNum2, 4096)) !== false) {
        $strRandomNum = $numbers;
    }

    if (!feof($RandomNum2)) {
        echo "Ошибка: fgets() сломався\n";
    }
}

$arrRandomNum = explode(" ", $strRandomNum);
$sumRandomNum = array_sum($arrRandomNum);
echo($sumRandomNum);
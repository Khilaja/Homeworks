<?php
$example = fopen("example.txt", "a+");
fwrite($example, 'Hello, world!');
fclose($example);
$example1 = fopen("example.txt", "r");
if ($example1) {
    while (($content = fgets($example1, 40)) !== false){
        echo $content;
    }

    if (!feof($example1)) {
        echo "Ошибка: fgets() сломався\n";
    }
    fclose($example1);
}


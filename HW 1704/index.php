<?php
$userData = fopen('data.txt', 'w+');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo true;
    if(isset($_POST['username']) && !empty(trim($_POST['username']))){
        $userName = $_POST['username'];
        fwrite($userData, "{$userName}");
    }
    if(isset($_POST['surname']) && !empty(trim($_POST['surname']))){
        $userSurname = $_POST['surname'];
        fwrite($userData, ", {$userSurname}");

    }
    if(isset($_POST['email']) && !empty(trim($_POST['email']))){
        $userEmail = $_POST['email'];
        fwrite($userData, ", {$userEmail}");
    }
    if(isset($_POST['agreement']) && $_POST['agreement'] !== ''){
        echo 'Согласие получено';
    }
}

fseek($userData, 0);
if ($userData) {
    while (($userInfo = fgets($userData, 4096)) !== false){
        echo "Данные успешно записаны :)";
    }

    if (!feof($userData)) {
        echo "Ошибка: fgets() сломався\n";
    }
}


<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo true;
    if(isset($_POST['username']) && !empty(trim($_POST['username']))){
        $username = $_POST['username'];
        echo $username;
    }
    if(isset($_POST['surname']) && !empty(trim($_POST['surname']))){
        $username = $_POST['surname'];
        echo $username;
    }
    if(isset($_POST['email']) && !empty(trim($_POST['email']))){
        $username = $_POST['email'];
        echo $username;
    }
    if(isset($_POST['agreement']) && $_POST['agreement'] !== ''){
        echo 'Согласие получено';
    }
}

<?php
$login=$_POST['login'];
$pass =$_POST['password'];
$pdo = new PDO ("mysql:host=localhost; dbname=voha", 'root', ''); 
$sql = "INSERT INTO users(login, password) VALUES ('$login','$password')";

if($result = $pdo -> exec($sql)){
    echo "НОВЫЙ ПОЛЬЗОВАТЕЛЬ СОЗДАН";
}else{
    echo"ОШИБКА";
}

    echo"<br>";

?>


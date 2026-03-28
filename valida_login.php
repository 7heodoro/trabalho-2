<?php
session_start();

$userMaster = "admin@blog.com";
$passMaster = "123456";

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($email == $userMaster && $senha == $passMaster) {
    $_SESSION['logado'] = true;
    header("Location: Index.php");
} else {
    header("Location: login.php?erro=1");
}

exit();
?>
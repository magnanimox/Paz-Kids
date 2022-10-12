<?php
session_start();
include("conexao.php");

if(empty($_POST["user"]) || empty($_POST["password"])) {
    header("Location: login.html");
    exit();
}

$user = mysqli_real_escape_string($conexao, $_POST["user"]);
$password = mysqli_real_escape_string($conexao, $_POST["password"]);

$query = "select user from usuario where user = '{$user}' and password = md5('{$password}')";

$result = mysqli_query($conexao, $query);

$row  = mysqli_num_rows($result);

if ($row == 1){
    $_SESSION["user"] = $user;
    header("Location: painel.php");
    exit();
} else {
    header("Location: login.html");
    exit();
}
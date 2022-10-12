<?php
include("conexao.php");

if(empty($_POST["user"]) || empty($_POST["password"])) {
    header("Location: index.html");
    exit();
}

$user = mysqli_real_escape_string($conexao, $_POST["user"]);
$password = mysqli_real_escape_string($conexao, $_POST["password"]);

$query = "select user from usuario where user = '{$user}' and password = md5('{$password}')";

$result = mysqli_query($conexao, $query);

$row  = mysqli_num_rows($result);

echo $row;exit;
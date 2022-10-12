<?php
include("conexao.php");

if(empty($_POST["user"]) || empty($_POST["password"])) {
    header("Location: index.html");
    exit();
}

$user = mysqli_real_escape_string($conexao, $_POST["user"]);
$password = mysqli_real_escape_string($conexao, $_POST["password"]);

$query = "SELECT user_id, user FROM usuario WHERE user = {$user} AND password = md5({$password})";

$result = mysqli_query($conexao, $query);

$row  = mysqli_num_rows($result);

echo $row;exit;
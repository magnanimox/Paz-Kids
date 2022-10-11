<?php
include("conexao.php");

if(empty($_POST["usuario"]) || empty($_POST["senha"])) {
    header("Location: index.html");
    exit();
}
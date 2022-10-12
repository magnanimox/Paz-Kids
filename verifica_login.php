<?php
session_start();
if(!$_SESSION["user"]){
    header("login.html");
    exit();
}
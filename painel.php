<?php
session_start();
?>

<h2>Olá, <?php echo $_SESSION["user"]; ?>!</h2>
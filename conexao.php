<?php
define("HOST", "ns964.hostgator.com.br");
define("USUARIO", "pazkid16_magnanimox");
define("SENHA", "VemMax131296");
define("DB", "pazkid16_login");

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ("Não foi possível conectar");
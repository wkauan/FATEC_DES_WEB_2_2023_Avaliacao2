<?php
require_once('cadastro.php');

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "vestibular";

$cadastro = new CadastroVestibular($servername, $username, $password, $dbname);
?>

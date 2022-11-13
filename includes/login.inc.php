<?php

if(isset($_POST["submit"])){

$login = $_POST["login_email"];
$pwd = $_POST["login_pass"];

require_once 'ConnexionBDD.php';
require_once 'function.inc.php';

if(emptyInputLogin($login, $pwd) !== false){
    header("location: ../PageConnexion.php?error=emptyinput");
    exit();
}

loginUser($conn, $login, $pwd);

} else {
    header("location: ../PageConnexion.php");
    exit();
}

?>
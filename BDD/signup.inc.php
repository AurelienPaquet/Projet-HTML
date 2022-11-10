<?php

if(isset($_POST["submit"])){

    $name = $_POST["le_nom"];
    $username = $_POST["le_prenom"];
    $email = $_POST["l_email"];
    $passwd = $_POST["le_pass"];
    $role = 1;
    //role : 1 = utilisateur, 2 = responsable, 3 = admin

    require_once 'ConnexionBDD.php';
    require_once 'function.inc.php';

    if(emptyInputSignup() !== false){
        header("location : ../index.php?error=emptyinput");
        exit();
    }

} else {
    header("location : ../index.php");
    exit();
}
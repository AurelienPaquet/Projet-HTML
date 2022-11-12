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

    if(emptyInputSignup($name, $username, $email, $passwd) !== false){
        header("location: ../PageCreation.php?error=emptyinput");
        exit();
    }

    if(invalidemail($email) !== false){
        header("location: ../PageCreation.php?error=invalidemail");
        exit();
    }
    if(emailExist($conn, $email) !== false){
        header("location: ../PageCreation.php?error=Emailtaken");
        exit();
    }

    createUser($conn, $name, $username, $email, $passwd, $role);


} else {
    header("location: ../PageCreation.php");
    exit();
}
?>
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

} else if (isset($_POST["supprimer"])){

    $useremail = $_POST["email"];
    
    require_once 'ConnexionBDD.php';
    require_once 'function.inc.php';
    

    DeleteUser($conn, $useremail);

    
} else if (isset($_POST["modif"])){

    $name_m = $_POST["modif_nom"];
    $username_m = $_POST["modif_prenom"];
    $email_m = $_POST["modif_email"];
    $ancienneemail = $_POST["email"];
    $role = 1;
    //role : 1 = utilisateur, 2 = responsable, 3 = admin

    require_once 'ConnexionBDD.php';
    require_once 'function.inc.php';


    

    ModifUser($conn, $name_m, $username_m, $email_m, $ancienneemail);
} else {
    header("location: ../PageModifier.php");
    exit();
}



?>
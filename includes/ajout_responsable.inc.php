<?php
if(isset($_POST["submit"])){

    $name_respo = $_POST["nom_respo"];
    $username_respo = $_POST["prenom_respo"];
    $email_respo = $_POST["email_respo"];
    $passwd_respo = $_POST["pass_respo"];
    $role = 2;
    //role : 1 = utilisateur, 2 = responsable, 3 = admin

    require_once 'ConnexionBDD.php';
    require_once 'function.inc.php';

    if(emptyInputSignup_responsable($name_respo, $username_respo, $email_respo, $passwd_respo) !== false){
        header("location: ../PageCreation_responsable.php?error=emptyinput");
        exit();
    }

    if(invalidemail_responsable($email_respo) !== false){
        header("location: ../PageCreation_responsable.php?error=invalidemail");
        exit();
    }
    if(emailExist_responsable($conn, $email_respo) !== false){
        header("location: ../PageCreation_responsable.php?error=Emailtaken");
        exit();
    }

    createUser($conn, $name_respo, $username_respo, $email_respo, $passwd_respo, $role);


} else {
    header("location: ../PageCreation_responsable.php?error");
    exit();
}
?>
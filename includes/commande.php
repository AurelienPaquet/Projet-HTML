<?php
if(isset($_POST["submit"])){

    $date = $_POST["date"];
    $id_user = $_POST["test"];


    require_once 'ConnexionBDD.php';
    require_once 'function.inc.php';
    if(CommandExist($conn, $id_user) !== false){
        header("location: ../PageCalendrier.php?error=Commandedejaencour");
        exit();
    }
    enregistercommande($conn, $date, $id_user);


}   
?>
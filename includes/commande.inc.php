<?php
if(isset($_POST["submit"])){

    $date = $_POST["date"];
    $id_user = $_POST["test"];
    $prix = $_POST["prix"];
    $etat = 1;
    //etat = 1 : en cours, 2 : déja validé;



    require_once 'ConnexionBDD.php';
    require_once 'function.inc.php';


    enregistercommande($conn, $date, $id_user, $prix, $etat);


} else if(isset($_POST["supprimer"])){
    require_once 'ConnexionBDD.php';
    require_once 'function.inc.php';

    $iduser = $_POST["id"];
    ValiderCommand($conn, $iduser);

}
?>
<?php
if(isset($_POST["submit"])){

    $nom_menu= $_POST["nom_plat"];
    $type = $_POST["typle_plat"];
    $image_url = $_POST["acces_image"];
    $description_menu = $_POST["description"];
   

    require_once 'ConnexionBDD.php';
    require_once 'function.inc.php';

    if(emptyInputAddMenu($nom_menu, $type, $image_url, $description_menu) !== false){
        header("location: ../ajout_menu.php?error=emptyinput");
        exit();
    }


    if(NameMenuExist($conn, $nom_menu) !== false){
        header("location: ../ajout_menu.php?error=NameAlreadytaken");
        exit();
    }

    createMenu($conn, $nom_menu, $type, $image_url, $description_menu);


} else {
    header("location: ../ajout_menu.php");
    exit();
}
?>
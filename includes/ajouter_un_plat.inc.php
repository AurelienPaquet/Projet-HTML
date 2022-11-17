<?php

if(isset($_POST["submit"])){

$jour = $_POST["jour"];
$mois = $_POST["mois"];
$annee = $_POST["annee"];

$entree = $_POST["entree"];
$plat = $_POST["plat"];
$dessert = $_POST["dessert"];

require_once 'ConnexionBDD.php';
require_once 'function.inc.php';

$date = $annee."-".$mois."-".$jour;





if(emptyInputMenu($date, $entree, $plat, $dessert) !== false){
    header("location: ../profile.php?error=emptyinput");
    exit();
}
if(dateExist($conn, $date) !== false){
    header("location: ../profile.php?error=Datetaken");
    exit();
}
AjoutMenuDate($conn, $date, $entree, $plat, $dessert);

} else {
    header("location: ../profile.php");
    exit();
}

?>
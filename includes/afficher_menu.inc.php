<?php



$jour = $_GET["jour"];
$mois = $_GET["mois"];
$annee = $_GET["year"];

require_once 'ConnexionBDD.php';
require_once 'function.inc.php';

$date = $annee."-".$mois."-".$jour;


affichermenu($conn, $date);

?>
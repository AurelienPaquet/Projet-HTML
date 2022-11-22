<?php

session_start();
session_unset();
session_destroy();
if(isset($_GET["error"])){
    if($_GET["error"] == "supprimer"){
        header("location: ../index.php?error=Comptesupprime");
        exit();
        }
} else {
    header("location: ../index.php");
    exit();
}


?>
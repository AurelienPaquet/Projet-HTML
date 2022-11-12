<?php
  $host="localhost";
  $namebdd="root";
  $passbdd="root";
  $dbname="serveur-cantine";

  $conn = mysqli_connect($host,$namebdd,$passbdd,$dbname);

  if(!$conn){
    die("Connexion Failed:" . mysqli_connect_error());
  }

?>
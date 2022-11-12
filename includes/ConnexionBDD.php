<?php
  $host="localhost";
  $name="root";
  $passwd="root";
  $dbname="serveur-cantine";

  $conn = mysqli_connect($host,$name,$passwd,$dbname);

  if(!$conn){
    die("Connexion Failed:" . mysqli_connect_error());
  }

?>
<?php

  $titre = "Historique";
  include 'head.php';
  include 'header.php';
  require_once 'includes/ConnexionBDD.php';
  require_once 'includes/function.inc.php';

// Affichage des messages à l'aide de Boostrap 
// (composant alert)
  if(isset($_SESSION['message'])) {
    echo '<div class="alert alert-primary" role="alert">';
    echo $_SESSION['message'];
    echo '</div>';
    unset($_SESSION['message']);
  }
?>
<section style='background-color:black;height:900px'>
    <?php 
    if(isset($_GET['id'])){
      $iduser=$_GET['id'];
      $sql = 'SELECT  id_user, date, entree, plat, dessert, prix, etat FROM commande';
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt, $sql)){
          header('location: ../historique.php?error=stmtfailed');
          exit();
      }



      $result = $conn->query($sql);
      $data = array();
      if (mysqli_num_rows($result) > 1){
          while($rowData = mysqli_fetch_assoc($result)){
          $data[] = $rowData;
          }
      }
      foreach ($data as $k) {
          affichermenu_plat($conn, $k['plat']);
          affichermenu_entree($conn, $k['entree']);
          affichermenu_dessert($conn, $k['dessert']);

          $etat = $k['etat'];
          if($etat==1){
              $etat_ecris = 'En cours de préparation';
          } else {
              $etat_ecris = 'Commande Validé';
          }
          $id=$k['id_user'];
          if($id==$iduser)
          echo "<div style='text-align:center;padding:10px;color:white'><span style='text-decoration: underline;font-size:25px;color:#d3ad7f;padding:0 15px'>Date</span> : ".$k['date']."<span style='text-decoration: underline;font-size:25px;color:#d3ad7f;padding:0 15px'> Entree : </span>".$_SESSION["EntreeNOM"]."<span style='text-decoration: underline;font-size:25px;color:#d3ad7f;padding:0 15px'> Plat : </span>".$_SESSION["PlatNOM"]."<span style='text-decoration: underline;font-size:25px;color:#d3ad7f;padding:0 15px'> Dessert :</span> ".$_SESSION["DessertNOM"]."<span style='text-decoration: underline;font-size:25px;color:#d3ad7f;padding:0 15px'> Prix :</span> ".$k['prix']."$ <span style='text-decoration: underline;font-size:25px;color:#d3ad7f;padding:0 15px'>Etat : ".$etat_ecris."</span></div>";
      }
    } else {
      echo "<h1>Erreur de Chargement...</h1>";
    }
   ?>
</section>





<?php 
  include 'footer.php';
?> 
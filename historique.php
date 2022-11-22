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
<section>
    <?php $sql = 'SELECT  id_user, date, entree, plat, dessert, prix, etat FROM commande';
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
                        $etat = $k['etat'];
                        if($etat==1){
                            $etat_ecris = 'En cours de préparation';
                        } else {
                            $etat_ecris = 'Commande Validé';
                        }
                        $id=$k['id_user'];
                        if($id==25)
                        echo "<div style='text-align:center;padding:10px;'>Date : ".$k['date']." Entree : ".$k['entree']." Plat : ".$k['plat']." Dessert : ".$k['dessert']." Prix : ".$k['prix']."$ Etat : ".$etat_ecris."</div>";
    }?>
</section>





<?php 
  include 'footer.php';
?> 
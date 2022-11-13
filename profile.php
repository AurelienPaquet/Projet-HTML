<?php

  $titre = "Page d'accueil";
  include 'head.php';
  include 'header.php';

// Affichage des messages à l'aide de Boostrap 
// (composant alert)
  if(isset($_SESSION['message'])) {
    echo '<div class="alert alert-primary" role="alert">';
    echo $_SESSION['message'];
    echo '</div>';
    unset($_SESSION['message']);
  }
?>


<section class="profile">
  <div class="row" style="background-color: black; width: 100%; height: 500px;">
    <div class="col-12">
        <h1 style="color:white;text-align: center;padding: 10px">Nom : <?php echo $_SESSION['usernom'];?></h1>
    </div>
    <div class="col-12">
        <h1 style="color:white;text-align: center;padding: 10px">Prénom : <?php echo $_SESSION['userprenom'];?></h1>
    </div>
    <div class="col-12">
        <h1 style="color:white;text-align: center;padding: 10px">Email : <?php echo $_SESSION['useremail']; ?></h1>
    </div>
    <div class="col-12">
        <?php
            if($_SESSION["userrole"] === 1){
                echo "<h1 style='color:white;text-align: center;padding: 25px;
                '>UTILISATEUR</h1>";
            } else if($_SESSION['userrole'] === 2){
                echo "<h1 style='color:white;text-align: center;padding: 25px;border-color: .1rem solid rgba(255,255,255,.3);
                '>RESPONSABLE</h1>";
            } else if($_SESSION['userrole'] === 3){
                echo "<h1 style='color:white;text-align: center;padding: 25px;border-color: .1rem solid rgba(255,255,255,.3);
                '>ADMIN</h1>";
            }
        ?>
    </div>
  </div>

</section>

<?php 
  include 'footer.php';
?> 
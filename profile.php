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

<?php
 if($_SESSION["userrole"] === 1){
    echo "<section class='profile'>
        <div class='row' style='background-color: black; width: 100%; height: 500px;'>
            <div class='col-12'>
                <h1 style='color:white;text-align: center;padding: 10px'>NOM : " . $_SESSION['usernom'] . "
            </h1>
            </div>
            <div class='col-12'>
                <h1 style='color:white;text-align: center;padding: 10px'>PRENOM : " . $_SESSION['userprenom'] . "</h1>
            </div>
            <div class='col-12'>
                <h1 style='color:white;text-align: center;padding: 10px'>EMAIL : " . $_SESSION['useremail'] . "</h1>
            </div>
            <div class='col-12'>
                <h1 style='color:white;text-align: center;padding: 10px'>UTILISATEUR</h1>
            </div>
        </div>
    </section>";
} else if($_SESSION['userrole'] === 2){
    echo "<section class='profile'>
        <div class='row' style='background-color: black; width: 100%; height: 500px;'>
            <div class='col-12'>
                <h1 style='color:white;text-align: center;padding: 10px'>NOM : " . $_SESSION['usernom'] . "
            </h1>
            </div>
            <div class='col-12'>
                <h1 style='color:white;text-align: center;padding: 10px'>PRENOM : " . $_SESSION['userprenom'] . "</h1>
            </div>
            <div class='col-12'>
                <h1 style='color:white;text-align: center;padding: 10px'>EMAIL : " . $_SESSION['useremail'] . " </h1>
            </div>
            <div class='col-12'>
                <h1 style='color:white;text-align: center;padding: 10px'>RESPONSABLE</h1>
            </div>
        </div>
    </section>";
    //ajout de plat
} else  if($_SESSION["userrole"] === 3){
 
    echo "<section class='profile'>
    <div class='row' style='background-color: black; width: 100%; height: 500px;'>
        <div class='col-12'>
            <h1 style='color:white;text-align: center;padding: 10px'>ADMIN</h1>
            <ul style='display:block; width: 100%;margin: 0 auto;'>
            <li style='text-align: center; list-style: none;padding:30px;'><a href='PageCreation_responsable.php' style='font-family: Fatface;font-size: 30px;
            color: white;
            text-decoration: none;
            text-transform: uppercase;'>Ajouter un responsable</a></li>
            <li style='text-align: center; list-style: none;padding:30px;'><a href='ajout_menu.php' style='font-family: Fatface;font-size: 30px;
            color: white;
            text-decoration: none;
            text-transform: uppercase;'>Ajouter menu</a></li>
            <li style='text-align: center; list-style: none;padding:30px;'><a href='PageCalendrier_respo.php' style='font-family: Fatface;font-size: 30px;
            color: white;
            text-decoration: none;
            text-transform: uppercase;'>Ajouter menu du jour</a></li>



          </ul>
        </div>
    </div>
</section>";
}

?>

<?php 
  include 'footer.php';
?> 
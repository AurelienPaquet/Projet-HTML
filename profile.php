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
    require_once 'includes/ConnexionBDD.php';
    require_once 'includes/function.inc.php';
    echo "<section class='profile'>
    <div class='row' style='background-color: black; width: 100%; height: 500px;'>
        <div class='col-12'>
            <h1 style='color:white;text-align: center;padding: 10px'>ADMIN</h1>

        </div>
    </div>
</section>";
}
$nom = "nom";
$type = "type";
$id = "id_menu";
?>

<label for="pet-select">Choose a dish :</label>

<select name="pets" id="pet-select">
<?php 

while(choix_menu($conn,$id)<20){
    echo   "<option value=".choix_menu($conn,$id).">".choix_menu($conn,$nom)."</option>";
}
?>
</select>







<?php 
  include 'footer.php';
?> 
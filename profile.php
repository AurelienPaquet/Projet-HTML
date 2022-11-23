<?php

  $titre = "Profile";
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
    $iduser=$_SESSION['userid'];
    $useremail = $_SESSION['useremail'];

    echo "<section class='profile'>
    
        <div class='row' style='background-color: black; width: 100%; height: 700px;'>
            <div class='col-12'>
                <h1 style='color:white;text-align: center;padding: 10px'>NOM : " . $_SESSION['usernom'] . "
            </h1>
            </div>
            <div class='col-12'>
                <h1 style='color:white;text-align: center;padding: 10px'>PRENOM : " . $_SESSION['userprenom'] . "</h1>
            </div>
            <div class='col-12'>
                <h1 style='color:white;text-align: center;padding: 10px'>EMAIL : " . $useremail . "</h1>
            </div>
            <div class='col-12'>
                <h1 style='color:white;text-align: center;padding: 10px'>UTILISATEUR</h1>
            </div>
            <ul style='display:block; width: 100%;margin: 0 auto;'>

                <li style='text-align: center; list-style: none;padding:10px;'>
                    <a href='historique.php?id=$iduser' style='font-family: Fatface;font-size: 30px;
                    color: white;
                    text-decoration: none;
                    text-transform: uppercase;'>Historique de Commande</a>
                </li>
          </ul>
            <form action='PageModifier.php' method='post' > 
                <div class='grid text-center' style='--bs-rows: 3; --bs-columns: 3;'>
                    <div class='d-grid g-start-1 gap-2 d-md-block' style='grid-row: 2; padding: 25px;'>
                    <button class='btn btn-outline-primary' type='modifier' name='modifier' style='padding:15px;color: white'>Modifier son Compte</button>
                    <input type='hidden' name='email' value='$useremail'></input>

                    </div>
                </div>
            </form>        
            <form action='includes/login.inc.php' method='post' > 
                <div class='grid text-center' style='--bs-rows: 3; --bs-columns: 3;'>    
                    <div class='d-grid g-start-1 gap-2 d-md-block' style='grid-row: 2; padding: 25px;'>
                        <button class='btn btn-outline-primary' type='supprimer' name='supprimer' style='padding:15px;color: white'>Supprimer son Compte</button>
                        <input type='hidden' name='email' value='$useremail'></input>

                    </div>
                </div>
            </form>
        </div>
    </section>";
} else if($_SESSION['userrole'] === 2){
    $useremail = $_SESSION['useremail'];

    echo "<section class='profile' style='height:700px;background-color:black'>
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
            <ul style='display:block; width: 100%;margin: 0 auto;'>
                <li style='text-align: center; list-style: none;padding:30px;'>
                    <a href='ajout_menu.php' style='font-family: Fatface;font-size: 30px;
                    color: white;
                    text-decoration: none;
                    text-transform: uppercase;'>Ajouter menu</a>
                </li>
                <li style='text-align: center; list-style: none;padding:30px;'>
                    <a href='PageCalendrier_respo.php' style='font-family: Fatface;font-size: 30px;
                    color: white;
                    text-decoration: none;
                    text-transform: uppercase;'>Ajouter menu du jour</a>
                </li>
                <li style='text-align: center; list-style: none;padding:30px;'>
                    <a href='historique_admin.php' style='font-family: Fatface;font-size: 30px;
                    color: white;
                    text-decoration: none;
                    text-transform: uppercase;'>Historique des Commandes</a>
                </li>
          </ul>
        </div>
    </section>";
    //ajout de plat
} else  if($_SESSION["userrole"] === 3){
    if(isset($_SESSION["error"]) && $_SESSION["error"] === commandeValidee){
        echo "<h1 style='text-align:center;color:white;font-size:60px;'>Commande Validée</h1>";
      }

    echo "<section class='profile'>
    <div class='row' style='background-color: black; width: 100%; height: 500px;'>
        <div class='col-12'>
            <h1 style='color:white;text-align: center;padding: 10px'>ADMIN</h1>
            <ul style='display:block; width: 100%;margin: 0 auto;'>
                <li style='text-align: center; list-style: none;padding:30px;'>
                    <a href='PageCreation_responsable.php' style='font-family: Fatface;font-size: 30px;
                    color: white;
                    text-decoration: none;
                    text-transform: uppercase;'>Ajouter un responsable</a>
                </li>
                <li style='text-align: center; list-style: none;padding:30px;'>
                    <a href='ajout_menu.php' style='font-family: Fatface;font-size: 30px;
                    color: white;
                    text-decoration: none;
                    text-transform: uppercase;'>Ajouter menu</a>
                </li>
                <li style='text-align: center; list-style: none;padding:30px;'>
                    <a href='PageCalendrier_respo.php' style='font-family: Fatface;font-size: 30px;
                    color: white;
                    text-decoration: none;
                    text-transform: uppercase;'>Ajouter menu du jour</a>
                </li>
                <li style='text-align: center; list-style: none;padding:30px;'>
                    <a href='historique_admin.php' style='font-family: Fatface;font-size: 30px;
                    color: white;
                    text-decoration: none;
                    text-transform: uppercase;'>Historique des Commandes</a>
                </li>
          </ul>
        </div>
    </div>
</section>";
}

?>

<style>
    .profile a:hover{
        background-color: #d3ad7f;
        padding: 20px;
        border-radius: 4%
    }
</style>

<?php 
  include 'footer.php';
?> 
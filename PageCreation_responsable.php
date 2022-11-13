<?php

  $titre = "Ajout Responsable";
  include 'head.php';
  include 'header.php';

?>

<?php
if($_SESSION["userrole"] === 3 ){

 echo "<section style='background-color: black;'>
        <div class='Ajout_respo' id='Ajout_respo' style='height: 900px;'>
        <div class='container' id='Ajout_respo'>
            <div class='col-md-12'>
            <h1 style='padding: 40px 0;color:white;text-align:center'>Ajouter un Responsable</h1>
            </div>
            
            <div class='container' id='formulaire'>
            <form action='includes/ajout_responsable.inc.php' method='post' > 
                <div class='col-md-12'>
                    <label for='nom_respo' class='form-label' style='padding: 10px 0;'>Nom :</label>
                    <input type='text' class='form-control' id='nom_respo' required name='nom_respo'>
                </div>
                <div class='col-md-12'>
                    <label for='prenom_respo' class='form-label' style='padding: 10px 0;'>Prénom :</label>
                    <input type='text' class='form-control' id='prenom_respo' required name='prenom_respo'>
                </div>
                
                <div class='col-md-12'>
                    <label for='email_respo'  placehoder='Chemin d'accès...' class='form-label' style='padding: 10px 0;'>Email du responsable :</label>
                    <input type='text' class='form-control'  id='email_respo' required name='email_respo'>
                </div>
                <div class='col-md-12'>
                    <label for='pass_respo' class='form-label' style='padding: 10px 0;'>Mot de passe :</label>
                    <input type='password' class='form-control' id='pass_respo' required name='pass_respo'>
                </div>
                <div>
                    <div class='d-grid gap-2 d-md-block'><button class='btn btn-outline-primary' type='submit' name='submit'>Enregistrer</button></div>   
                </div>
            </form>
            </div>
        </div>
        </div>
        </section>";
        } else {
            header("location: index.php");
            exit();
        }
?>




<?php
  include 'footer.php';
?>
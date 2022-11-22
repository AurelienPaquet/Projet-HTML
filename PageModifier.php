<?php

  $titre = "Modifier Compte";
  include 'head.php';
  include 'header.php';
  if(!isset($_POST["email"])){
    header("location: profile.php?error=acces");

  }
?>
<div class="signin" id="signin" style="height: 900px;">
  <div class="container" id="inscription">
    <div class="col-md-12">
      <h1 style="padding: 40px 0;">Modifier un Compte</h1>
    </div>
    
    <div class="container" id="formulaire">
      <form action="includes/login.inc.php" method="post" > 
          <div class="col-md-12">
            <label for="nom" class="form-label" style="padding: 10px 0;">Nom</label>
            <input type="text" class="form-control" placehoder="Le nom..." id="modif_nom" required name="modif_nom">
          </div>
          <div class="col-md-12">
            <label for="prenom" class="form-label" style="padding: 10px 0;">Prénom</label>
            <input type="text" class="form-control" placehoder="Le prénom..." id="modif_prenom" required name="modif_prenom">
          </div>
          <div class="col-md-12">
            <label for="mail" class="form-label" style="padding: 10px 0;">Email</label>
            <input type="email" class="form-control"  id="modif_email" required name="modif_email" placehoder="L'e-mail...">
          </div>

        <div>
            <div class="d-grid gap-2 d-md-block">
              <button class="btn btn-outline-primary" type="modif" name="modif">Modifier</button>
              <?php 
               if(isset($_POST["email"])){
                $ancienneemail = $_POST["email"];
              echo "<input type='hidden' name='email' value=$ancienneemail></input>";
               } else {
                //header("location: index.php?error=acces");
               }
              ?>
          </div>   
        </div>
      </form>
      <?php
if(isset($_GET["error"])){
  if($_GET["error"] == "emptyinput"){
    echo "<p>Rentrez tous les champs pour vous connecter !</p>";
  }
 else if($_GET["error"] == "invalidemail"){
    echo "<p >Entrez un vrai mail</p>";
  }  else if($_GET["error"] == "stmtfailed"){
    echo "<p>error BDD... recommencez</p>";
  }  else if($_GET["error"] == "Emailtaken"){
    echo "<p>Email déja prit</p>";
  }  
}
?>
    </div>
  </div>
</div>


<?php
  include 'footer.php';
?>
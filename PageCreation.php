<?php

  $titre = "Inscription";
  include 'head.php';
  include 'header.php';

?>
<div class="signin" id="signin" style="height: 900px;">
  <div class="container" id="inscription">
    <div class="col-md-12">
      <h1 style="padding: 40px 0;">Créer un compte</h1>
    </div>
    
    <div class="container" id="formulaire">
      <form action="includes/signup.inc.php" method="post" > 
          <div class="col-md-12">
            <label for="nom" class="form-label" style="padding: 10px 0;">Nom</label>
            <input type="text" class="form-control" placehoder="Le nom..." id="nom" required name="le_nom">
          </div>
          <div class="col-md-12">
            <label for="prenom" class="form-label" style="padding: 10px 0;">Prénom</label>
            <input type="text" class="form-control" placehoder="Le prénom..." id="prenom" required name="le_prenom">
          </div>
          <div class="col-md-12">
            <label for="mail" class="form-label" style="padding: 10px 0;">Email</label>
            <input type="email" class="form-control"  id="mail" required name="l_email" placehoder="L'e-mail...">
          </div>
          <div class="col-md-12">
            <label for="pass" class="form-label" style="padding: 10px 0;">Password</label>
            <input type="password" class="form-control" placehoder="Le mot de passe..." id="pass" required name="le_pass">
          </div>
        <div>
            <div class="d-grid gap-2 d-md-block"><button class="btn btn-outline-primary" type="submit" name="submit">S'inscrire</button></div>   
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
  }  else if($_GET["error"] == "none"){
    echo "<p>Votre inscription est validée</p>";
  }
}
?>
    </div>
  </div>
</div>


<?php
  include 'footer.php';
?>
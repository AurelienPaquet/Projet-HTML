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
      <form action="BDD/creation.php" method="post" > 
          <div>
            <label for="nom" class="form-label" style="padding: 10px 0;">Nom</label>
            <input type="text" class="form-control" id="nom" required name="le_nom">
          </div>
          <div>
            <label for="prenom" class="form-label" style="padding: 10px 0;">Prénom</label>
            <input type="text" class="form-control" id="prenom" required name="le_prenom">
          </div>
          <div>
            <label for="mail" class="form-label" style="padding: 10px 0;">Email</label>
            <input type="email" class="form-control" id="mail" required name="l_email">
          </div>
          <div>
            <label for="pass" class="form-label" style="padding: 10px 0;">Password</label>
            <input type="password" class="form-control" id="pass" required name="le_pass">
          </div>
        <div>
            <div class="d-grid gap-2 d-md-block"><button class="btn btn-outline-primary" type="submit">S'inscrire</button></div>   
        </div>
      </form>
    </div>
  </div>
</div>
    


<?php
  include 'footer.php';
?>
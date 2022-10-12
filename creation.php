<?php
  $titre = "Créer un compte";
  include 'header.inc.php';
  include 'menu.inc.php';
?>
    <h1>Créer un compte</h1>
    <div class="container">
      <form class="row g-3" action="tt_creation.php" method="post"> 
        <div class="col-md-6">
          <label for="nom" class="form-label">Nom</label>
          <input type="text" class="form-control" id="nom" required name="le_nom">
        </div>
        <div class="col-md-6">
          <label for="prenom" class="form-label">Prénom</label>
          <input type="text" class="form-control" id="prenom" required name="le_prenom">
        </div>
        <div class="col-md-6">
          <label for="mail" class="form-label">Email</label>
          <input type="email" class="form-control" id="mail" required name="l_email">
        </div>
        <div class="col-md-6">
          <label for="pass" class="form-label">Password</label>
          <input type="password" class="form-control" id="pass" required name="le_pass">
        </div>
        <div class="row my-3">
      <div class="d-grid gap-2 d-md-block"><button class="btn btn-outline-primary" type="submit">Envoyer</button></div>   
    </div>
        
      </form>
    </div>

<?php 
  include 'footer.inc.php';
?> 
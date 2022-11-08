<?php

  $titre = "Connexion";
  include 'head.php';
  include 'header.php';

?>
<div class="signin" id="signin">
  <div class="container" id="inscription">
    <div class="col-md-12">
      <h1 style="padding: 30px 0;">Se connecter</h1>
    </div>
    
    <div class="container" id="formulaire">
      <form action="BDD/creation.php" method="post"> 

          <div>
            <label for="mail" class="form-label" style="padding: 10px 0;">Email</label>
            <input type="email" class="form-control" id="mail" required name="l_email_co">
          </div>
          <div>
            <label for="pass" class="form-label" style="padding: 10px 0;">Password</label>
            <input type="password" class="form-control" id="pass" required name="le_pass_co">
          </div>
        <div>
            <div class="d-grid gap-2 d-md-block"><button class="btn btn-outline-primary" type="submit">Connexion</button></div>   
        </div>
      </form>
    </div>
  </div>
</div>
    


<?php
  include 'footer.php';
?>
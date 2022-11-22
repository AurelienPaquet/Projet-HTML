<?php

  $titre = "Connexion";
  include 'head.php';
  include 'header.php';

?>
<div class="signin" id="signin" style="height: 900px;">
  <div class="container" id="inscription">
    <div class="col-md-12">
      <h1 style="padding: 40px 0;">Connexion</h1>
    </div>
    
    <div class="container" id="formulaire">
      <form action="includes/login.inc.php" method="post" > 
        
          <div class="col-md-12">
            <label for="mail" class="form-label" style="padding: 10px 0;">Email</label>
            <input type="text" class="form-control" id="mail" required name="login_email">
          </div>
          <div class="col-md-12">
            <label for="pass" class="form-label" style="padding: 10px 0;">Password</label>
            <input type="password" class="form-control" id="pass" required name="login_pass">
          </div>
        <div>
            <div class="d-grid gap-2 d-md-block"><button class="btn btn-outline-primary" type="submit" name="submit">Se Connecter</button></div>   
        </div>
      </form>
      <?php
      if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
          echo "<p>Rentrez tous les champs pour vous connecter !</p>";
        }
        else if($_GET["error"] == "mauvaislogin"){
          echo "<p >Mauvais Login</p>";
        }
      }
      ?>
    </div>
  </div>
</div>



<?php
  include 'footer.php';
?>
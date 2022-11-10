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



<!--Main-->

<main class="main">


  <!-- Section Bienvenu -->

    <section class="admin">
 
    <div class="row">
        <div class="col-sm-12 text-center" style="padding: 25px 0;">
            <h1 style="color:white">Ajouter un nouveau responsable</h1>
        </div>
        <div class="col-sm-12 text-center" style="padding: 25px 0;">
            <h1 style="color:white">Ajouter un nouveau menu</h1>
        </div>
        <div class="col-sm-12 text-center" style="padding: 25px 0 ;">
            <h1 style="color:white">Consulter la liste de commande</h1>
        </div>
    </div>



    </section>
  
    <!-- Fin de Section Bienvenu -->

  </main>

<!--Fin Main-->

<?php 
  include 'footer.php';
?> 
   
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
  <div class="container">

    <section class="about" id="about">

    <div class="col-12">
      <h1 class="heading">BIENVENUE</h1>

    </div>
    <div class="row">
          <div class="col-6" id="carousel">
            <div id="carousel-bienvenu" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item">
                 <img src="image/img-bienvenu.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item active" data-bs-interval=1000>
                  <img src="image/img-bienvenu2.jpg" class="d-block w-100" alt="...">
                </div>
              </div>  
            </div>
          </div>
        <div class="col-5" id="text">
          <div class="content">
            <h3>Bien le bonjour !</h3>
            <p>Bienvenue sur notre nouveau site de la cantine de l'esigelec</p>
            <p>Vous y trouverez chaque semaine un nouveau menu pour la semaine</p>
          </div>
        </div>
    </div>
   

    </section>
     </div>
  
    <!-- Fin de Section Bienvenu -->

  </main>

<!--Fin Main-->

<?php 
  include 'footer.php';
?> 
   
<?php

  $titre = "Page d'accueil";
  include 'head.php';

// Affichage des messages à l'aide de Boostrap 
// (composant alert)
  if(isset($_SESSION['message'])) {
    echo '<div class="alert alert-primary" role="alert">';
    echo $_SESSION['message'];
    echo '</div>';
    unset($_SESSION['message']);
  }
?>

<!-- Header -->
<header class="header">
  <div class="container-fluid sticky-top">
    <div class="row">
        <div class="col" id="logo">
          <img src="image/logo_esigelec.png" alt="Logo de l'Esigelec">
        </div>
        <div class="col-6 text-center" id="menu">
          <a href="Page Accueil">Accueil</a>
          <a href="Calendrier">Calendrier</a>
          <a href="dq">Menu</a>
        </div>
        <div class="col" id="icons">
          <div class="icons">
            <div class="fas fa-user"></div>
          </div>
        </div>      
    </div>
  </div>
</header>

<!-- Fin Header -->

<!--Main-->

<main class="main">
  <div class="row">



    <div class="col" id="entree">
      <div id="carousel-plat" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/img-menu3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/img-menu2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/img-menu3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/img-menu4.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
    </div>
    <div class="col" id="plat">
      <div id="carousel-plat" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/img-main1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/img-menu2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/img-menu3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/img-menu4.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
    </div>


    <div class="col" id="dessert">
    <div id="carousel-dessert" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item">
            <img src="image/img-menu2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item active" data-bs-interval=1000>
            <img src="image/img-menu3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval=2000>
            <img src="image/img-menu4.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item "data-bs-interval =1500>
            <img src="image/img-main1.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
    </div>

  </div>
</main>

<!--Fin Main-->

<?php 
  include 'footer.php';
?> 
   
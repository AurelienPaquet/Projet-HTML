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
        <?php
              if(isset($_SESSION["usernom"]) && $_SESSION["userrole"] === 2){

                echo "<h1 style='text-align:center;color:white;font-size:60px;'>Bienvenue M. Responsable</h1>";

              } else if (isset($_SESSION["usernom"]) && $_SESSION["userrole"] === 3){
                echo "<h1 style='text-align:center;color:white;font-size:60px;'>Bienvenue M. Admin</h1>";

               echo "<ul>
                  <li><a href='PageCreation_responsable.php'>Ajouter un responsable</a></li>
                  <li><a href='ajout_menu.php'>Ajouter menu</a></li>
                  <li><a href='PageCalendrier_respo.php'>Ajouter menu du jour</a></li>

                </ul>";
              }        

        ?>


  <div>

    <section class="home" id="home">
    <div class="content">
      <h1>BIENVENUE</h1>
    </div>

    </section>

    <section class="map">
              <div id="map" style="width: 600px;height: 600px;"></div>
              <script>
                function initMap(){
                    var location = {lat: 49.38339, lng: 1.07683};
                    var map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 17,
                        center: location
                    });
                    var marker = new google.maps.Marker({
                        position: location,
                        map: map
                    });
                }
            </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFMJ4HM0r5BhswlDQw5i5sJOKQORZ26DE&callback=initMap"></script>

    </section>


    <section class="about" id="about">


    <div class="row">
          <div id="carousel-sm">
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
        <div id="text">
          <div class="content">
            <h3>à propos de <span id="titre">NOUS</span></h3>
            <p>Heureux de vous accueillir sur notre nouveau site de la cafeteria de l'ESIGELEC. On vous propose donc d'accéder aux menus de la semaine et du jours même ainsi que votre commande précédement passé. Nous espérons que ce site vous plaise.<br><span id="signature">L'Administration.</span></p>
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
   
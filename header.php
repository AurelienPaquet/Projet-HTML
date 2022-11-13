<!-- Header -->

<header class="header">

  

    <nav>
      <div style="padding: 0 40px">
      <a href="https://www.w3schools.com/default.asp" target="_blank" rel="noopener noreferrer"><img src="image/logo_esigelec.png" href="https://www.w3schools.com/default.asp" alt="Logo de l'Esigelec" id="logo"></a>
      </div>


      <ul>
        <li> <a href="index.php" >Accueil</a>       </li>
        <li> <a href="PageCalendrier.php">Calendrier</a>       </li>
        <li> <a href="#footer">Contact</a>       </li>
        <?php

        if(isset($_SESSION["usernom"]) && $_SESSION["userrole"] === 1){
            echo "<li><a href='profile.php'>Profile</a></li>";

            echo "</ul>";
            echo "<a href='includes/logout.inc.php'><span class='material-symbols-outlined' style='float: right; padding: 30px 80px;     font-size: 40px;color: white;'>
            exit_to_app
            </span></a>";
        } else if (isset($_SESSION["usernom"]) && $_SESSION["userrole"] === 2){
          echo "<li><a href='profile.php'>Profile</a></li>";

            echo "</ul>";
            echo "<a href='includes/logout.inc.php'><span class='material-symbols-outlined' style='float: right; padding: 30px 80px;     font-size: 40px;color: white;'>
            exit_to_app
            </span></a>";

        } else if (isset($_SESSION["usernom"]) && $_SESSION["userrole"] === 3){
          echo "<li><a href='profile.php'>Profile</a></li>";

          echo "</ul>";
          echo "<a href='includes/logout.inc.php'><span class='material-symbols-outlined' style='float: right; padding: 30px 80px;     font-size: 40px;color: white;'>
          exit_to_app
          </span></a>";

        } else {
          echo "</ul>";
          echo  "<div id='icons'>
              <div class='dropdown right' style='padding: 0 106px'>
                <button class='dropbtn fas fa-user' ></button>
                <div class='dropdown-content' style='right:0'>
                  <a href='PageCreation.php'>S'inscrite</a>
                  <a href='PageConnexion.php'>Se connecter</a>
                </div>
              </div>
            </div>
            </ul>"
            ;
        }
        

?>
      
      

    </nav>

</header>

<!-- Fin Header -->
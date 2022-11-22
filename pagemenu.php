<?php

 
  $titre = "Page des Menus";
  include 'head.php';
  include 'header.php';
  


  ?>



<section class="page-menu">
    <div class="container-fluid titre_date">
        <div class="col-12" id="date">
            <h1>Menu Du Jour</h1>
        </div>
    </div>
    <div class="container-fluid menu-entree">
        <div class="col-12">
            <h2>Entree</h2>
        
        </div>
        <div class="row">
        <div class="col-sm-12 row-entree  text-center">
            <div id="menu_entree_1" >
                <h3 class="nom">Menu n°<span>1</span></h3>
                <h4><span>Nom<br></span><?php echo $_GET['nom_entree']?></h4>
                <div class="container-fluid">
                <img src=<?php echo $_GET['img_entree']?> class="img-fluid rounded" alt="image temporaire">
                </div>
                <h4><span>Description<br></span><?php echo $_GET['desc_entree']?></h4>
            </div>
        </div>
        </div>

    </div>
    <div class="container-fluid menu-plat">
        <div class="col-12">
            <h2>Plat</h2>
        </div>
        <div class="row">
            <div class="col-sm-12 row-entree  text-center " id="menu_plat_1">
                <h3 class="nom">Menu n°<span>1</span></h3>
                <h4><span>Nom<br></span><?php echo $_GET['nom_plat']?></h4>
                <img src=<?php echo $_GET['img_plat']?> class="img-fluid rounded" alt="image temporaire">
                <h4><span>Description</span><br><?php echo $_GET['desc_plat']?></h4>
            </div>
        </div>
    </div>
    <div class="container-fluid menu-dessert">
        <div class="col-12">
                <h2>Dessert</h2>
            </div>
            <div class="row row-entree">
            <div class="col-sm-12 row-entree  text-center " id="menu_dessert_1">
                    <h3 class="nom">Menu n°<span>1</span></h3>
                    <h4><span>Nom<br></span><?php echo $_GET['nom_dessert']?></h4>
                    <img src=<?php echo $_GET['img_dessert']?> class="img-fluid rounded" alt="image temporaire">
                    <h4><span>Description</span><br><?php echo $_GET['desc_dessert']?></h4>
                </div>
        </div>
    </div>
    <div class="container-fluid menu-dessert">
        <div class="col-12">
            <?php
                $prixtotal = $_GET['prix_entree'] + $_GET['prix_plat'] + $_GET['prix_dessert'];
                echo "<h2>$prixtotal</h2>";
            ?>
                
        </div>
    </div>
    <?php

    if(isset($_SESSION["usernom"]) && $_SESSION["userrole"] === 1){
        $date = $_GET["date"];
        $id = $_SESSION['userid'];
        echo "  <form action='includes/commande.inc.php' method='post' > 
                    <div class='grid text-center' style='--bs-rows: 3; --bs-columns: 3;'>
                        <div class='d-grid g-start-2 gap-2 d-md-block' style='grid-row: 2; padding: 25px;'><button class='btn btn-outline-primary' type='submit' name='submit' style='padding:15px;color: white'>Commander</button></div>
                        <input type='hidden' name='date' value='$date'></input>
                        <input type='hidden' name='test' value='$id'></input>
                        <input type='hidden' name='prix' value='$prixtotal'></input>

                    </div>
                </form>";

    }
    ?>
</section>

<?php
  include 'footer.php';
?>

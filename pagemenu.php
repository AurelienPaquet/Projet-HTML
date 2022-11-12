<?php
  $titre = "Page des Menus";
  include 'head.php';
  include 'header.php';  
?>

<section class="page-menu">
    <div class="container-fluid titre_date">
        <div class="col-12" id="date">
            <h1><?php echo $_GET["jour"];?> <?php echo $_GET["mois"];?> <?php echo $_GET["year"];?></h1>
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
                <h4><span>Nom<br></span> entree-test</h4>
                <div class="container-fluid">
                <img src="image/entree-test.jpg" class="img-fluid rounded" alt="image temporaire">
                </div>
                <h4><span>Description<br></span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ipsum turpis, cursus finibus libero eu, semper congue dolor. Cras ut mattis eros. Praesent vitae risus odio.</h4>
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
                <h4><span>Nom<br></span> plat-test</h4>
                <img src="image/plat-test.jpg" class="img-fluid rounded" alt="image temporaire">
                <h4><span>Description</span><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ipsum turpis, cursus finibus libero eu, semper congue dolor. Cras ut mattis eros. Praesent vitae risus odio.</h4>
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
                <h4><span>Nom<br></span> dessert-test</h4>
                <img src="image/dessert-test.jpg" class="img-fluid rounded" alt="image temporaire">
                <h4><span>Description</span><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ipsum turpis, cursus finibus libero eu, semper congue dolor. Cras ut mattis eros. Praesent vitae risus odio.</h4>
            </div>
    </div>
    </div>
</section>

<?php
  include 'footer.php';
?>
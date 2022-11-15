<?php
   require_once 'includes/ConnexionBDD.php';
   require_once 'includes/function.inc.php';
?>
<?php

$titre = "Page Ajout Menu du jour";
include 'head.php';
include 'header.php';
if($_SESSION["userrole"] ===  1){
    header("location: index.php?mauvaisepage");
    exit();
}
$date = $_GET["year"]."/".$_GET["mois"]."/".$_GET["jour"];
?>

<div class="signin" id="signin" style="height: 900px;">
  <div class="container" id="inscription">
    <div class="col-md-12">
      <h1 style="padding: 40px 0;">Ajout du plat</h1>
    </div>
        <div class="container-fluid titre_date">
        <div class="col-12" id="date">
            <h1><?php echo $date;?></h1>
        </div>
    </div>
    
    <div class="container" id="formulaire">
      <form action="includes/ajouter_un_plat.inc.php" method="post" > 
        

        <div class="col-md-12">
            <label for='entree-select'>Choississez une entrée : </label>
                <select name='entree' id='entree-select'>
                    <?php $sql = 'SELECT  id_menu,nom,type, description FROM menu;';
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt, $sql)){
                        header('location: ../index.php?error=stmtfailed');
                        exit();
                    }
                    $result = $conn->query($sql);
                    $data = array();
                    if (mysqli_num_rows($result) > 0){
                        while($rowData = mysqli_fetch_assoc($result)){
                        $data[] = $rowData;
                        }
                    }
                    foreach ($data as $k) {
                        echo "<option value=".$k['id_menu']."> Type : ".$k['type']." Nom du plat : ".$k['nom']."</option>";
                        }?>
                </select>
        </div>
        <div class="col-md-12">
            <div>
                <label for='plat-select'>Choississez un Plat : </label>
                <select name='plat' id='plat-select'>
                        <?php $sql = 'SELECT  id_menu,nom,type, description FROM menu;';
                        $stmt = mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt, $sql)){
                            header('location: ../index.php?error=stmtfailed');
                            exit();
                        }
                        $result = $conn->query($sql);
                        $data = array();
                        if (mysqli_num_rows($result) > 0){
                            while($rowData = mysqli_fetch_assoc($result)){
                            $data[] = $rowData;
                            }
                        }
                        foreach ($data as $k) {
                            echo "<option value=".$k['id_menu']."> Type : ".$k['type']." Nom du plat : ".$k['nom']."</option>";
                            }?>
                </select>
            </div>
        <div class="col-md-12">
            <div>
                <label for='dessert-select'>Choississez un Dessert : </label>
                <select name='dessert' id='dessert-select'>
                        <?php $sql = 'SELECT  id_menu,nom,type, description FROM menu;';
                        $stmt = mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt, $sql)){
                            header('location: ../index.php?error=stmtfailed');
                            exit();
                        }
                        $result = $conn->query($sql);
                        $data = array();
                        if (mysqli_num_rows($result) > 0){
                            while($rowData = mysqli_fetch_assoc($result)){
                            $data[] = $rowData;
                            }
                        }
                        foreach ($data as $k) {
                            echo "<option value=".$k['id_menu']."> Type : ".$k['type']." Nom du plat : ".$k['nom']."</option>";
                            }?>
                </select>
                </div>
            </div>
        <div>
            <div class="d-grid gap-2 d-md-block"><button class="btn btn-outline-primary" type="submit" name="submit">Enregistrer ce Menu</button></div>   
        </div>
      </form>
    </div>
  </div>
</div>


<?php
  include 'footer.php';
?>

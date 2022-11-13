<?php
  $titre = "Ajout Menu";
  include 'head.php';
  include 'header.php';
?>
<?php
if($_SESSION["userrole"] === 2 || $_SESSION["userrole"] === 3 ){

 echo "<section style='background-color: black;'>
        <div class='Ajout_menu' id='Ajout_menu' style='height: 900px;'>
        <div class='container' id='Ajouter un plat'>
            <div class='col-md-12'>
            <h1 style='padding: 40px 0;color:white;text-align:center'>Ajouter un Plat</h1>
            </div>
            
            <div class='container' id='formulaire'>
            <form action='includes/ajout_menu.inc.php' method='post' > 
                <div class='col-md-12'>
                    <label for='nom' class='form-label' style='padding: 10px 0;'>Nom du Plat :</label>
                    <input type='text' class='form-control' id='nom_plat' required name='nom_plat'>
                </div>
                <div class='col-md-12'>
                    <label for='type_plat' style='padding: 10px 0;'>Type du plat :</label>
                    <select id='type_plat' name='typle_plat' size='3' multiple>
                        <option value=1>Entrée</option>
                        <option value=2>Plat</option>
                        <option value=3>Dessert</option>
                    </select>
                </div>
                <div class='col-md-12'>
                    <label for='acces_image'  placehoder='Chemin d'accès...' class='form-label' style='padding: 10px 0;'>Chemin d'accès de l'image</label>
                    <input type='text' class='form-control'  id='acces_image' required name='acces_image'>
                </div>
                <div class='col-md-12'>
                    <label for='description' class='form-label' style='padding: 10px 0;'>Description :</label>
                    <input type='description' class='form-control' id='description' required name='description'>
                </div>
                <div>
                    <div class='d-grid gap-2 d-md-block'><button class='btn btn-outline-primary' type='submit' name='submit'>Enregistrer</button></div>   
                </div>
            </form>
            </div>
        </div>
        </div>
        </section>";
        } else {
            header("location: index.php");
            exit();
        }
?>




<?php
  include 'footer.php';
?>
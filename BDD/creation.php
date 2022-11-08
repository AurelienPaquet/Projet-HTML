<?php
  session_start(); // Pour les massages

  
  // Contenu du formulaire :
  $nom =  htmlentities($_POST['le_nom']);
  $prenom = htmlentities($_POST['le_prenom']);
  $email =  htmlentities($_POST['l_email']);
  $password = htmlentities($_POST['le_pass']);
  $role = 0; 
    /*1 : utilisateur
    2 : admin */
    
  // Option pour bcrypt
  $options = [
        'cost' => 10,
  ];

  // Connexion :
  require_once("ConnexionBDD.php");
  $mysqli = new mysqli($host, $name, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }

  $sqlQuery = 'SELECT * FROM user';
  $userStatement = $mysqli->prepare($sqlQuery);
  $userStatement->execute();

  foreach ($userStatement as $users){
  ?>
    <p><?php echo $users['email']; ?></p>
<?php
}
?>
 

<?php
  session_start(); // Pour les massages

  
  // Contenu du formulaire :
  $nom =  htmlentities($_POST['le_nom']);
  $prenom = htmlentities($_POST['le_prenom']);
  $email =  htmlentities($_POST['l_email']);
  $password = htmlentities($_POST['le_pass']);
  $role = 1; 

  
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


  if ($stmt = $mysqli->prepare("INSERT INTO user(nom, prenom, email, password, role) VALUES (?, ?, ?, ?, ?)")) {
    $password = password_hash($password, PASSWORD_BCRYPT, $options);
    $stmt->bind_param("ssssi", $nom, $prenom, $email, $password, $role);
    // Le message est mis dans la session, il est préférable de séparer message normal et message d'erreur.
    if($stmt->execute()) {
      $_SESSION['window.alert'] = "Enregistrement réussi";
    } else {
      $_SESSION['window.alert'] =  "Impossible d'enregistrer";
    }
  }
  // Redirection vers la page d'accueil 
  // Où le message présent dans la session sera affiché.
  header('Location: ../index.php');

?>
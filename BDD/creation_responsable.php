<?php
  session_start(); // Pour les massages

  
  // Contenu du formulaire :
  $nom =  htmlentities($_POST['le_nom']);
  $prenom = htmlentities($_POST['le_prenom']);
  $email =  htmlentities($_POST['l_email']);
  $password = htmlentities($_POST['le_pass']);
  $role = 2; // 0: pour l'utilisateur par défaut 1:...
  
  // Option pour bcrypt
  $options = [
        'cost' => 12,
  ];

  // Connexion :
  require_once("ConnexionBDD.php");
  $mysqli = new mysqli($host, $name, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }

  // Attention, ici on ne vérifie pas si l'utilisateur existe déjà
  // Cette opération doit être faite, on suppose l'email comme étant
  // Un champ unique !
  if ($stmt = $mysqli->prepare("INSERT INTO user(nom, prenom, email, password, role) VALUES (?, ?, ?, ?, ?)")) {
    $stmt->bind_param("ssssi", $nom, $prenom, $email, $password, $role);
    // Le message est mis dans la session, il est préférable de séparer message normal et message d'erreur.
    if($stmt->execute()) {
        $_SESSION['message'] = "Enregistrement réussi";
    } else {
        $_SESSION['message'] =  "Impossible d'enregistrer";
    }
  }
  // Redirection vers la page d'accueil 
  // Où le message présent dans la session sera affiché.
  header('Location: ../index-admin.php');

?>
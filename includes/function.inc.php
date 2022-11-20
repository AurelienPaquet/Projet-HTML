<?php

function emptyInputSignup($name, $username, $email, $passwd){
  $result;
  if(empty($name) || empty($username) || empty($email) || empty($passwd)){
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function emptyInputSignup_responsable($name_respo, $username_respo, $email_respo, $passwd_respo){
  $result;
  if(empty($name_respo) || empty($username_respo) || empty($email_respo) || empty($passwd_respo)){
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function emptyInputMenu($date, $entree, $plat, $dessert){
  $result;
  if( empty($entree) || empty($plat) || empty($dessert)){
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}


  function invalidemail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $result = true;
    } else {
      $result = false;
    }
    return $result;
  } 
  function invalidemail_responsable($email_respo){
    $result;
    if(!filter_var($email_respo, FILTER_VALIDATE_EMAIL)){
      $result = true;
    } else {
      $result = false;
    }
    return $result;
  } 

  function emailExist_responsable($conn, $email_respo){
    $sql = "SELECT * FROM user WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../PageCreation_responsable.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
  }
  function emailExist($conn, $email){
    $sql = "SELECT * FROM user WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../PageCreation.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
  } 

  function dateExist($conn, $date){
    $sql = "SELECT * FROM date_menu WHERE date = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../PageCreation.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $date);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
  } 

  function createUser($conn, $name, $username, $email, $passwd, $role){
    $sql = "INSERT INTO user (nom, prenom, email, password, role) VALUES (?, ?, ?, ?, ?);";
    $hashedPwd = password_hash($passwd, PASSWORD_DEFAULT);
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../PageCreation.php?error=stmtfailed");
        exit();
    }


    mysqli_stmt_bind_param($stmt, "ssssi", $name, $username, $email, $hashedPwd, $role);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../PageCreation.php?error=none");
    exit();
    }

    function AjoutMenuDate($conn, $date, $entree, $plat, $dessert){
      $sql = "INSERT INTO date_menu (date, menu_entree, menu_plat, menu_dessert) VALUES (?, ?, ?, ?);";
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt, $sql)){
          header("location: ../ajouter_un_plat.php?error=stmtfailed");
          exit();
      }
  
      mysqli_stmt_bind_param($stmt, "ssss", $date, $entree, $plat, $dessert);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      header("location: ../index.php");
      exit();
      }
  

    function emptyInputLogin($login, $pwd){
      $result;
      if(empty($login) || empty($pwd)){
        $result = true;
      } else {
        $result = false;
      }
      return $result;
    }

    function loginUser($conn, $login, $pwd){
      $emailExist = emailExist($conn, $login);

      if($emailExist === false){
        header("location: ../PageConnexion.php?error=mauvaislogin");
        exit();
      }

      
      $pwdHashed = $emailExist["password"];
      $checkPwd = password_verify($pwd, $pwdHashed);
      if($pwd === $pwdHashed){
        $checkAdmin = true;
      }

      if($checkPwd === true || $checkAdmin === true) {
        if($checkAdmin === true){
          session_start();
          $_SESSION["userid"] = $emailExist["id"];
          $_SESSION["userprenom"] = $emailExist["prenom"];
          $_SESSION["usernom"] = $emailExist["nom"];
          $_SESSION["userrole"] = $emailExist["role"];

          header("location: ../index.php?SessionAdmin");
          exit();
        } else {
          session_start();
          $_SESSION["userid"] = $emailExist["id"];
          $_SESSION["userprenom"] = $emailExist["prenom"];
          $_SESSION["usernom"] = $emailExist["nom"];
          $_SESSION["userrole"] = $emailExist["role"];
          $_SESSION["useremail"] = $emailExist["email"];
          header("location: ../index.php");
          exit();
        } 

      } else {
        header("location: ../PageConnexion.php?error=wrongPassWord");
        exit();
      } 

      }

      function DateMenuExist($conn, $date){
        $sql = "SELECT * FROM date_menu WHERE date = ?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "s", $date);
        mysqli_stmt_execute($stmt);
    
        $resultData = mysqli_stmt_get_result($stmt);
    
        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        } else {
            $result = false;
            return $result;
        }
        mysqli_stmt_close($stmt);
      } 
      function MenuExist($conn, $id){
        $sql = "SELECT * FROM menu WHERE id_menu = ?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
    
        $resultData = mysqli_stmt_get_result($stmt);
    
        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        } else {
            $result = false;
            return $result;
        }
        mysqli_stmt_close($stmt);
      } 


      function affichermenu_entree($conn, $id){
        $menuExist = MenuExist($conn, $id);
  
        if($menuExist === false){
          header("location: ../index.php?error=mauvaislogin");
          exit();
        } else {
          $_SESSION["EntreeNOM"] = $menuExist["nom"];
          $_SESSION["EntreeTYPE"] = $menuExist["type"];
          $_SESSION["EntreeIMG"] = $menuExist["image"];
          $_SESSION["EntreeDESC"] = $menuExist["description"];

        }
      }

        function affichermenu_plat($conn, $id){
          $menuExist = MenuExist($conn, $id);
    
          if($menuExist === false){
            header("location: ../index.php?error=mauvaislogin");
            exit();
          } else {
            $_SESSION["PlatNOM"] = $menuExist["nom"];
            $_SESSION["PlatTYPE"] = $menuExist["type"];
            $_SESSION["PlatIMG"] = $menuExist["image"];
            $_SESSION["PlatDESC"] = $menuExist["description"];
  

          }
  

        }

        function affichermenu_dessert($conn, $id){
          $menuExist = MenuExist($conn, $id);
    
          if($menuExist === false){
            header("location: ../index.php?error=mauvaislogin");
            exit();
          } else {
            $_SESSION["DessertNOM"] = $menuExist["nom"];
            $_SESSION["DessertTYPE"] = $menuExist["type"];
            $_SESSION["DessertIMG"] = $menuExist["image"];
            $_SESSION["DessertDESC"] = $menuExist["description"];
          }
        }
        

        function emptyInputAddMenu($nom_menu, $type, $image_url, $description_menu){
          $result;
          if(empty($nom_menu) || empty($type) || empty($image_url) || empty($description_menu)){
            $result = true;
          } else {
            $result = false;
          }
          return $result;
        }
        
        function NameMenuExist($conn, $nom_menu){
          $sql = "SELECT * FROM menu WHERE nom = ?;";
          $stmt = mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt, $sql)){
              header("location: ../ajout_menu.php?error=stmtfailed");
              exit();
          }
      
          mysqli_stmt_bind_param($stmt, "s", $nom_menu);
          mysqli_stmt_execute($stmt);
      
          $resultData = mysqli_stmt_get_result($stmt);
      
          if($row = mysqli_fetch_assoc($resultData)){
              return $row;
          } else {
              $result = false;
              return $result;
          }
      
          mysqli_stmt_close($stmt);
        } 

        function createMenu($conn, $nom_menu, $type, $image_url, $description_menu){
          $sql = "INSERT INTO menu (nom, type, image, description) VALUES (?, ?, ?, ?);";
          $stmt = mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt, $sql)){
              header("location: ../ajout_menu.php?error=stmtfailed");
              exit();
          }
      
      
          mysqli_stmt_bind_param($stmt, "siss", $nom_menu, $type, $image_url,$description_menu);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_close($stmt);
          header("location: ../ajout_menu.php?error=none");
          exit();
        }


        function choix_menu($conn, $test){
          $sql = "SELECT id_menu, nom, type FROM menu;";
          $stmt = mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt, $sql)){
              header("location: ../index.php?error=stmtfailed");
              exit();
          }
          $result = $conn->query($sql);
          $data = array();
            if (mysqli_num_rows($result) > 0){
              while($rowData = mysqli_fetch_assoc($result)){
                $data[] = $rowData;
            }
        }

        //print_r($data);

        foreach($data as $nom){
           echo $nom[$test]." ";
        }

      }

      function affichermenu($conn, $date){
        $DateMenuExist = DateMenuExist($conn, $date);
  
        if($DateMenuExist === false){
          header("location: ../index.php?error=dateintrouvable");
          exit();
        }
  
        $_SESSION["datemenu"] = $date;
        $identree = $DateMenuExist["menu_entree"];
        $idplat = $DateMenuExist["menu_plat"];
        $iddessert = $DateMenuExist["menu_dessert"];
        affichermenu_plat($conn, $idplat);
        affichermenu_entree($conn, $identree);
        affichermenu_dessert($conn, $iddessert);
        $nom_entree = $_SESSION["EntreNOM"];
        $img_entree = $_SESSION["EntreeIMG"];
        $desc_entree = $_SESSION["EntreeDESC"];

        $nom_plat = $_SESSION["PlatNOM"];
        $img_plat = $_SESSION["PlatIMG"];
        $desc_plat = $_SESSION["PlatDESC"];

        $nom_dessert = $_SESSION["DessertNOM"];
        $img_dessert = $_SESSION["DessertIMG"];
        $desc_dessert = $_SESSION["DessertDESC"];
        header("location: ../pagemenu.php?date=$date&img_entree=$img_entree&nom_entree=$nom_entree&desc_entree=$desc_entree&img_plat=$img_plat&nom_plat=$nom_plat&desc_plat=$desc_plat&img_dessert=$img_dessert&nom_dessert=$nom_dessert&desc_dessert=$desc_dessert");
        exit();
        
        }

        function CommandExist($conn, $id_user){
          $sql = "SELECT * FROM commande WHERE id_user = ?";
          $stmt = mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt, $sql)){
              header("location: ../index.php?error=stmtfailed");
              exit();
          }
  
          mysqli_stmt_bind_param($stmt, "i", $id_user);
          mysqli_stmt_execute($stmt);
      
          $resultData = mysqli_stmt_get_result($stmt);
      
          if($row = mysqli_fetch_assoc($resultData)){
              return $row;
          } else {
              $result = false;
              return $result;
          }
          mysqli_stmt_close($stmt);
        } 

        function enregistercommande($conn, $date, $id_user){
          $DateMenuExist = DateMenuExist($conn, $date);
    

          
          $identree = $DateMenuExist["menu_entree"];
          $idplat = $DateMenuExist["menu_plat"];
          $iddessert = $DateMenuExist["menu_dessert"];
          $sql = "INSERT INTO commande (id_user, date, entree, plat, dessert) VALUES (?, ?, ?, ?, ?);";
          $stmt = mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt, $sql)){
              header("location: ../PageCalendrier.php?error=stmtfailed");
              exit();
          }
      
          mysqli_stmt_bind_param($stmt, "isiii", $id_user, $date, $identree, $idplat, $iddessert);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_close($stmt);

          header("location: ../index.php?error=commandevalide");
          exit();
          
          }
?>
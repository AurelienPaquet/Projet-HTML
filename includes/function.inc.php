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

      if($checkPwd === false && $checkAdmin === false){
        header("location: ../PageConnexion.php?error=wrongPassWord");
        exit();
      } else if($checkPwd === true || $checkAdmin === true) {
        if($checkAdmin === true){
          session_start();
          $_SESSION["userprenom"] = $emailExist["prenom"];
          $_SESSION["usernom"] = $emailExist["nom"];
          $_SESSION["userrole"] = $emailExist["role"];

          header("location: ../index.php?SessionAdmin");
          exit();
        } else {
          session_start();
          $_SESSION["userprenom"] = $emailExist["prenom"];
          $_SESSION["usernom"] = $emailExist["nom"];
          $_SESSION["userrole"] = $emailExist["role"];
          $_SESSION["useremail"] = $emailExist["email"];
          header("location: ../index.php");
          exit();
  
        }

      }

      }


      function MenuExist($conn, $id){
        $id = 2;
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


      function AjoutMenu($conn, $id){
        $menuExist = MenuExist($conn, $id);
  
        if($menuExist === false){
          header("location: ../index.php?error=mauvaislogin");
          exit();
        } else {
          session_start();
          $_SESSION["menuNom"] = $menuExist["nom"];
          $_SESSION["menuType"] = $menuExist["type"];
          $_SESSION["menuImage"] = $menuExist["image"];
          $_SESSION["menuDescription"] = $menuExist["description"];

          header("location: ../pagemenu.php");
          exit();
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
?>
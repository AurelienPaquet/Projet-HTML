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



  function invalidemail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $result = true;
    } else {
      $result = false;
    }
    return $result;
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
    $passwd = password_hash($password, PASSWORD_DEFAULT);
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../PageCreation.php?error=stmtfailed");
        exit();
    }


    mysqli_stmt_bind_param($stmt, "ssssi", $name, $username, $email, $passwd, $role);
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
        header("location: ../PageCreation.php?error=mauvaislogin");
        exit();
      }
      //methode hash
      $pwdHashed = $emailExist["password"];
      $checkPwd = password_verily($pwd, $pwdHashed);



      //$pwdBDD = $emailExist["password"];
     // $checkPwd = password_verify($pwd, $pwdBDD);

      if($checkPwd === false){
        header("location: ../PageConnexion.php?error=wrongPassWord");
        exit();
      } else if($checkPwd === true) {
        session_start();
        $_SESSION["userprenom"] = $emailExist["prenom"];
        $_SESSION["usernom"] = $emailExist["nom"];
        header("location: ../index.php");
        exit();

      }

      }
?>
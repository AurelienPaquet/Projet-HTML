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
?>
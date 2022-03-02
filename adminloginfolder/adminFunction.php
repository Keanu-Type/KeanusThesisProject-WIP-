<?php
  function CheckAccount($conn,$adminLogin,$adminPass){

    //INITIALIZE COMMANDS
    $sql = "SELECT * FROM admin WHERE admin_email = ? AND admin_pwd = ?;";
    $stmt = mysqli_stmt_init($conn);

    //CHECK CONNECTION IF WORKING
      if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../adminlogin.html?login=Error");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"ss",$adminLogin,$adminPass);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)){
      $password = $row['admin_pwd'];
      $email  =   $row['admin_email'];
      //CASE SENSITIVE CHECKING
      if (($adminPass === $password && $adminLogin === $email)){
        header("location:../adminhome.html");
      }else{
        header("location:../adminlogin.html?login=invalidpassoremail");
      }

    }else{
      header("location:../adminlogin.html?login=invalidpassoremail");
    }

  }


?>

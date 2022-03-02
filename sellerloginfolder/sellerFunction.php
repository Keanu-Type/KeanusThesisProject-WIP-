<?php
  function CheckAccount($conn,$SellerLogin,$SellerPass){

    //INITIALIZE COMMANDS
    $sql = "SELECT * FROM seller WHERE selleremail = ? AND sellerpassword = ?;";
    $stmt = mysqli_stmt_init($conn);

    //CHECK CONNECTION IF WORKING
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../sellerlogin.html?login=Error");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"ss",$SellerLogin,$SellerPass);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)){
      $password = $row['sellerpassword'];
      $email  =   $row['selleremail'];
      //CASE SENSITIVE CHECKING
      if (($SellerPass === $password && $SellerLogin === $email)){
          header("location:../seller-register-local.html");
      }else{
        header("location:../sellerlogin.html?login=invalidpassoremail");
      }
    }else{
      header("location:../sellerlogin.html?login=invalidpassoremail");
    }

  }


?>

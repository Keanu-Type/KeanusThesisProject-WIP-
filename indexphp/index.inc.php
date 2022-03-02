<?php

  if(isset($_POST['indexButton'])){

    $UserLoginNumberPHP = $_POST['IndexNumber']; //Get input
    require_once 'PHPBASE.inc.php';
    require_once 'indexFunction.php';

    //ERROR FOR EMPTY BOX
    if(EmptyInputIndex($UserLoginNumberPHP)!==false){
      header("location: ../index.html?errornumber=empty");
      echo "error1";
      exit();
    }
    //NO PLUS SIGN
    
    if(InvalidCharIndex($UserLoginNumberPHP)!==false){
      header("location: ../index.html?errornumber=invalid");
      echo "error2";
      exit();
    }

    if(Noplus($UserLoginNumberPHP)!==false){
      header("location: ../index.html?errornumber=noplus");
      exit();
    }



    //ERROR FOR INVALID CHARACTERS

    //CHECKING THE DATABASE
    if(CheckNumber($conn,$UserLoginNumberPHP)!== false){
      exit();
    }

  };
    //NEED SESSION AND REDIRECT TO OTP-LOGIN

?>

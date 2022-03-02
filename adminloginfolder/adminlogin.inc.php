<?php
  include_once 'PHPBASEadminaccount.php';
  if(isset($_POST['adminbutton'])){

    $adminLogin = mysqli_real_escape_string($conn, $_POST['adminemail']);
    $adminPass = mysqli_real_escape_string($conn,  $_POST['adminpass']);

    require_once 'PHPBASEadminaccount.php';
    require_once 'adminFunction.php';

    //CHECK IF INPUTS ARE EMPTY
    if(empty($adminLogin)||empty($adminPass)){
       header("Location: ../adminlogin.html?login=empty&selleremail=$adminLogin");
       echo "error 1";
       exit();
     }else{
       echo "error 2";
    //CHECK EMAIL IF VALID USING FILTER
       if(!filter_var($adminLogin, FILTER_VALIDATE_EMAIL)){
         echo "error 3";
          header("Location: ../adminlogin.html?login=invalidEmail&selleremail=$adminLogin");
          exit();
       }else{
         //SENDING DATA
         echo "error 4";
          if(CheckAccount($conn,$adminLogin,$adminPass)){
            echo "error5";
              exit();
          }
       }
     }
   }

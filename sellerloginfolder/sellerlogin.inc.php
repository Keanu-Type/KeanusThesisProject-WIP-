<?php
  include_once 'PHPBASEselleraccount.php';
  if(isset($_POST['sellerbutton'])){

    $SellerLogin = mysqli_real_escape_string($conn, $_POST['selleremail']);
    $SellerPass = mysqli_real_escape_string($conn,  $_POST['sellerpassword']);

    require_once 'PHPBASEselleraccount.php';
    require_once 'sellerFunction.php';

    //CHECK IF INPUTS ARE EMPTY
    if(empty($SellerLogin)||empty($SellerPass)){
       header("Location: ../sellerlogin.html?login=empty&selleremail=$SellerLogin");
       echo "error 1";
       exit();
     }else{
       echo "error 2";
    //CHECK EMAIL IF VALID USING FILTER
       if(!filter_var($SellerLogin, FILTER_VALIDATE_EMAIL)){
         echo "error 3";
          header("Location: ../sellerlogin.html?login=invalidEmail&selleremail=$SellerLogin");
          exit();
       }else{
         //SENDING DATA
         echo "error 4";
          if(CheckAccount($conn,$SellerLogin,$SellerPass)){
            echo "error5";
              exit();
          }
       }
     }
   }

<?php

 function EmptyInputIndex($UserLoginNumberPHP){ //ERROR IF NO INPUT
   $result;
   if(empty($UserLoginNumberPHP)){
     $result = true;
   }else{
     $result = false;
   }
   return $result;
 }


 function Noplus($UserLoginNumberPHP){
   $result;
   if(!preg_match('/^[+]/',$UserLoginNumberPHP)){
     $result = true;
   }else{
     if (!preg_match("/[a-zA-Z +-]/", $UserLoginNumberPHP)){
       $result = true;
     }else{
       $result = false;
     }
   }
   return $result;
 }

 function InvalidCharIndex($UserLoginNumberPHP){ //ERROR FOR INVALID CHARACTERS
  $result;
  if (!preg_match("/^[a-zA-Z]*$/", $UserLoginNumberPHP)){
    $result = false;
  }else{
    $result = true;
  }
  return $result;
}







 function CheckNumber($conn, $UserLoginNumberPHP){
      $sql = "SELECT*FROM register WHERE simnum = ?;";
      $stmt = mysqli_stmt_init($conn);

      //CHECK CONNECTION IF WORKING
      if(!mysqli_stmt_prepare($stmt,$sql)){
          header("Location: ../index.html?errornumber=stmtfailed");
          exit();
      }

      mysqli_stmt_bind_param($stmt,"i", $UserLoginNumberPHP);
      mysqli_stmt_execute($stmt);
      $resultData = mysqli_stmt_get_result($stmt);

      if ($row = mysqli_fetch_assoc($resultData)){
          header("location:../enter-OTP.html?");
      }else{
          header("location:../index.html?errornumber=notexist");
      }
  }
/*
function SendNumberIndex($conn, $UserLoginNumberPHP){ //ERROR IF DOES NOT EXIST

  $sql = "SELECT * FROM register WHERE simnum = ?"; //put one of the statement here. treat this as SQL code
  $stmt = mysqli_stmt_init($conn); ////this will initialize the connection

  if(!mysqli_stmt_prepare($stmt,$sql)){ //this means the mysqli_stmt_prepare will run the sql and stmt. if it not succeed it will not run the if statement
    header("Location: ../index.html?error=error");
  }else{
    mysqli_stmt_bind_param($stmt, "s", $UserLoginNumberPHP); //s means that the parameter will be a string. //Bind parameters to the placeholder
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt); //get the data
    while($row = mysqli_fetch_assoc($result)){ //we are going to pass the $results to $row. it will become an array
      header("location ../enter-otp.html"); //SUCCESS
    }
  }
}
*/
/*$sql = "SELECT * FROM register WHERE simnum = ?;";
$stmt = mysqli_stmt_init($conn);
//CHECKING CONNECTION
if(!mysqli_stmt_prepare($stmt,$sql)){
  header("Location: ../index.html?error=error"); //ERROR BECAUSE THE DATABASE IS NOT WORKING
  exit();
}
mysqli_stmt_bind_param($stmt,'s',$UserLoginNumberPHP); //SUBMITTING THE DATA TO TEST(NOT ADDING TO DATABASE)
mysqli_stmt_execute($stmt); //the $stmt is very important. from statement to result

$resultData = mysqli_stmt_get_result($stmt);

//CHECKING IF THEre RESULT
if ($row = mysqli_fetch_assoc($resultData)){ //fetching data as ascotiate to array. and i want to see if anything use resultData
  return $row; //returning all the data. from the Database.
}else{
  $result = false;
  return $result;
}
} */

?>

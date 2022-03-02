<?php
//.inc.php. .inc has nothing to do. just naming purpose
$dbServername = "localhost";
$dbUsername = "root"; //this will be ONLY change if using server not local
$dbPassword = ""; //i set a password to nothing . you can put one
$dbName = "seller_account_database"; //this is where we will put our database name

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword,$dbName) //stands for CONNection
 ?>

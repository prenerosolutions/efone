<?php
 error_reporting(0);
/*******************************************************************************
* Company Name: Prenero Solutions                                               *
*                                                                      *
* Version: 1.1.1	                                                   *
* Author:  Atiq Ramzan                                    			   *
*******************************************************************************/
if ($_SERVER['SERVER_NAME'] == 'localhost') {

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "efone";

} else { 
$localhost = "localhost";
$username = "legendup_prenero";
$password = "Prenero1102/*";
$dbname = "legendup_efone";
}

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection

date_default_timezone_set('Asia/Karachi');


if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}
?>
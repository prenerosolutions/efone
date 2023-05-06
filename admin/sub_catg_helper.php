<?php 
session_start();
$_SESSION['sub_ctg_id'] = $_GET['value'];
echo $_SESSION['sub_ctg_id'];

 ?>
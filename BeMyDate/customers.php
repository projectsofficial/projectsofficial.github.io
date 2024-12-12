<?php 
include './DB/db.php'; 
session_start(); 
if (!$_GET["successfullypaid"]) {
    header("location: dashboard.php");
    exit;
}else {
    $reference = $_GET["successfullypaid"];
    $creationDate = date("Y-m-d");
    $expDate =date("Y-m-d", strtotime('+1 month'));
};
$first_name = $_SESSION["first_name"];
$last_name = $_SESSION["last_name"];
$email = $_SESSION['email1'];
$Phone_no =  $_SESSION['Phone_no'];
$Amount =  $_SESSION['Amount'];
echo  $first_name ."<br>";
echo  $Amount ."<br>";
echo  $reference ."<br>";
echo  $creationDate ."<br>";
echo  $expDate ;

$sqlinsert = "INSERT INTO customers (`first_name`, `last_name`, `email`,  `Phone_no`, `Amount`, `Reference`,`Created_Date`,`Exp_Date`) VALUES (?,?,?,?,?,?,?,?)";
$stmt = $conn -> prepare($sqlinsert);
$stmt -> bind_param("ssssssss", $first_name,$last_name, $email,$Phone_no,$Amount,$reference,$creationDate,$expDate );
if ($stmt -> execute()) {
   header('Location: dashboard1.php');
  
}else {
   echo "Error";
   $stmt -> error;
}


  

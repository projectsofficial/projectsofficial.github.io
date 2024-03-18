<?php 
include_once("../connection/dbconnection.php");
$MAW_No= mysqli_real_escape_string($conn,$_POST['MAW_No']);
$MAW_img = mysqli_real_escape_string($conn,$_POST['MAW_img']);
$Description = mysqli_real_escape_string($conn,$_POST['Description']);
$Price = mysqli_real_escape_string($conn,$_POST['Price']);

$sql ="INSERT INTO Men_african_wear(Men_african_wear_id,Men_african_wear_img,`Description`,price)
VALUES (?,?,?,?)";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt,$sql)) {
   echo "SQL statement failed";
}else{
    mysqli_stmt_bind_param($stmt,"ssss", $MAW_No,$MAW_img,$Description,$Price);
    mysqli_stmt_execute($stmt); 
}


header("Location:./admin_home.php?Image Submitted Successfully ");

exit();
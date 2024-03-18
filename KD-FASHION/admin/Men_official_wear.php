<?php 
include_once("../connection/dbconnection.php");
$MOW_No= mysqli_real_escape_string($conn,$_POST['MOW_No']);
$MOW_img = mysqli_real_escape_string($conn,$_POST['MOW_img']);
$Description = mysqli_real_escape_string($conn,$_POST['Description']);
$Price = mysqli_real_escape_string($conn,$_POST['Price']);

$sql ="INSERT INTO Men_official_wear(Men_official_wear_id,Men_official_wear_img,`Description`,price)
VALUES (?,?,?,?)";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt,$sql)) {
   echo "SQL statement failed";
}else{
    mysqli_stmt_bind_param($stmt,"ssss", $MOW_No,$MOW_img,$Description,$Price);
    mysqli_stmt_execute($stmt); 
}


header("Location:./admin_home.php?Image Submitted Successfully ");

exit();
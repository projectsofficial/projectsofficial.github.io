<?php 
include './DB/db.php'; 

if (isset($_POST["Ssubmit"])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $DOB = $_POST['DOB'];
    $Age = $_POST['Age'];
    $Gender = $_POST["gender"];
    $Tel = $_POST['tele'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $Rpassword = $_POST['Rpassword'];
    $loc = $_POST['loc'];
    $date = Date('Y-m-d');
    
    if (empty($fname) OR empty($lname) OR empty($DOB) OR empty($Age) OR empty($Gender) OR empty($Tel) OR empty($email) OR empty($password) OR empty($Rpassword) OR empty($loc)) {
        header('location:signup.html?error=empty fields');
       
        exit;
    }
    if ( $password != $Rpassword) {
       header('location:signup.html?error=Passwords do not match');
       exit;
    };
   
 
// check whether email exist
$sql1 = "SELECT * FROM signup where email = ? ";
$stmt1 = $conn -> prepare($sql1);
 $stmt1 -> bind_param("s",$email);
 $stmt1 -> execute();
 $result = $stmt1 -> get_result();
 if ( $result -> num_rows > 0 ) {
   $row = $result -> fetch_assoc();
   header('Location: signup.html?email exit');
   $stmt -> error;
//    echo "user found: " . $row['First_name'] . "(" . $row['email'] . ")"; 
 }
 else { 
    //  insert into db if email doesnt exist
    $sqlinsert = "INSERT INTO signup (`First_name`, `Last_name`, `email`, `password`, `Phone_no`, `DOB`, `Age`, `Loc`, `gender`, `Date`) VALUES (?,?,?,?,?,?,?,?,?,?)";
 $stmt = $conn -> prepare($sqlinsert);
 $stmt -> bind_param("ssssssssss", $fname,$lname, $email,$password ,  $Tel,$DOB,  $Age,$loc,$Gender,$date );
 if ($stmt -> execute()) {
    header('Location: index.html?signup successful');
   
 }else {
    echo "Error";
    $stmt -> error;
 }
}
}else {
    echo 'eror'; 
    exit;
};




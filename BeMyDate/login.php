<?php
include './DB/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$email = $_POST['email'];

$password = $_POST['password'];
$date = date("Y-m-d");
$sql1 = "SELECT * FROM signup where email = '$email' ";
$result1 = $conn ->query($sql1);
if ($result1 -> num_rows > 0) {
  while($row1 = $result1 -> fetch_assoc() ){
if ($password == $row1["password"]) {
  $First_name =  $row1["First_name"];
      $Last_name =  $row1["Last_name"];
      $Phone_no =  $row1["Phone_no"];
      $email1 =  $row1["email"];
      $pwd =  $row1["password"];
      echo  $First_name;
      session_start(); 
    $_SESSION['first_name'] = $First_name;
    $_SESSION['last_name'] = $Last_name;
    $_SESSION['email1'] = $email1;
    $_SESSION['Phone_no'] = $Phone_no;
    $_SESSION['pwd'] = $pwd;
    header('Location: dashboard.php');
  $sql2 = "SELECT * FROM customers where email = '$email'  ";
  $result2 = $conn ->query($sql2);
  if ($result2 -> num_rows > 0) {
    while($row = $result2 -> fetch_assoc() ){
    
      if ($date >= $row["Exp_Date"] ) {
       header('Location: dashboard.php');
      }else {
        header('Location: dashboard1.php');
      }
      
    }
   
  }
}else{
  header('Location: index.html? incorrect logins');
}
  

 }
}
else{
  
  header('Location: index.html?Logins not found please sign up first');
  } 
?>  
</body>
</html>







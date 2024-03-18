<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/all.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/mdb.min.css">
        <link rel="stylesheet" href="../css/animate.css">
        <title>KD-FASHION</title>
    </head>
    <body>

<?php include_once("header.php"); ?>

<?php 
                        include_once("../connection/dbconnection.php");
                        $content = "SELECT * FROM   Men_official_wear  order by Men_official_wear_id desc ";



					  $cat_quer = mysqli_query($conn,$content) ;



					$mycat_row = mysqli_fetch_assoc($cat_quer);



					 $Men_offcial_wear_id=$mycat_row['Men_official_wear_id'];



					 $newid=$Men_offcial_wear_id;?>
<main>
<div class='container-fluid collect'>
<section class="breadcrumbs-section">
        <div class="container p-1 p-sm-3">
            <div class="row">
    <div class="col-12">
        <h2>Men Official Wear Collection</h2>
        <ol class=breadcrumb> 
            <li class="breadcrumb-item"><a href="../home.php">Home</a></li>
            <li class="breadcrumb-item active">Men Official Wear Collection</li>
        </ol>
    </div>
            </div>
        </div>
       
    
    </section>
    <div class='container-fluid'>
<div class='row'>
<?php include_once("../connection/dbconnection.php"); ?>
    <?php $Men_offcial_wear = " select * from Men_official_wear order  by Men_official_wear_id DESC";
    $result = mysqli_query($conn, $Men_offcial_wear);
    $resultChecker =  mysqli_num_rows($result);
    if($resultChecker > 0) {
        while ($row = mysqli_fetch_assoc($result)){
           
            echo "<div class='col-md-3'>";
            echo       "<div class='card wow fadeInDown'>";
            echo "<img src='../images/men official wear/{$row['Men_official_wear_img']}' alt='img'  >";
             echo   "<div class='card-body'>";
                  echo  "<h3 class='card-title   text-center'> Men African Wear ".$row['Men_official_wear_id']. "</h3>";
                  echo  "<p class='card-text'>" .$row['Description']. "</p>";
                  echo  "<a href='tel: +233-55-379-0731' class='btn btn-lg btn-danger'>";
                  echo      "<i class='fa fa-shopping-cart pr-2'></i>" .$row['price']. "</a>";
             echo   "</div>";
          echo  "</div>";
       echo "</div>";
        } 
    }
    ?>
</div>
</div>
</main>



            
            
<?php  include_once("../footer.php"); ?>

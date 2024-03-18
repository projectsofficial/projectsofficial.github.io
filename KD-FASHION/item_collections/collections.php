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
       <header>
       <?php include_once("header.php"); ?>
       
       <?php 
       include_once("../connection/dbconnection.php");
       
                     ?>
                      
       </header>
            <main>
                <!-- Collection -->
               
                <div class="container-fluid collect">
                    <div class="row">
                        <div class="col-12"> 
                            <h5 class="text-center  coll-head bold">COLLECTION OF APPARELS</h5><hr></div>
</div>
                
                        </div>
                        <div class="row">
                        <div class="col-12 coll-sub-head">
                            <h3 class="text-center bold wow slideInDown pt-3 pb-2">Men  Outfits</h3>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-4">
                           <?php
                     $Men_african_wear= "SELECT * FROM   Men_african_wear  order by Men_african_wear_id desc limit 1";
                     $Men_official_wear = "SELECT * FROM   Men_official_wear  order by Men_official_wear_id desc limit 1";
                 // Men_african_wear
                   $cat_Men_african_wear = mysqli_query($conn,$Men_african_wear) ;
                 $mycat_Men_african_wear_row = mysqli_fetch_assoc($cat_Men_african_wear);
                  $Men_african_wear_img=$mycat_Men_african_wear_row['Men_african_wear_img'];
                  $newMen_african_wear_img=$Men_african_wear_img;
                  // Men_official_wear
                  $cat_Men_official_wear = mysqli_query($conn,$Men_official_wear) ;
                 $mycat_Men_official_wear_row = mysqli_fetch_assoc($cat_Men_official_wear);
                  $Men_official_wear_img=$mycat_Men_official_wear_row['Men_official_wear_img'];
                  $newMen_official_wear_img=$Men_official_wear_img;?>
                            <div class="card wow fadeInDown">
                                <img src="../images/men african wear/<?php echo $newMen_african_wear_img  ?>" alt="" class="card-img-top img-fluid prod">
                                <div class="card-body">
                                    <h3 class="card-title   text-center">Men African Wear</h3>
                                    <p class="card-text">
                                       Here is a collection of various styles of men african clothings!!!. 
                                      <br> Just click on the for more button to enjoy my collection😊.
                                    </p>
                                    <a href="./Men_african_wear_collections.php" class="btn btn-lg btn-danger">
                                        <i class="fa fa-shopping-cart pr-2"></i>For More...
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card wow slideInUp">
                                <img src="../images/men official wear/<?php echo $newMen_official_wear_img  ?>" alt="" class="card-img-top img-fluid prod">
                                <div class="card-body">
                                    <h3 class="card-title   text-center">Men OFFICIAL Wear</h3>
                                    <p class="card-text">
                                       Explore my vast COLLECTION OF stylished designed men official wear😎.
                                    <br> Click on th for more to see more😉.
                                    </p>
                                    <a href="./Men_official_wear_collections.php" class="btn btn-lg btn-danger">
                                        <i class="fa fa-shopping-cart pr-2"></i>For More...
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card wow bounceInDown">
                                <img src="../images/ladies flower designs/IMG-20220324-WA0091.jpg" alt="" class="card-img-top img-fluid prod">
                                <div class="card-body">
                                    <h3 class="card-title   text-center">Lacostes</h3>
                                    <p class="card-text">
                                        Enjoy my colletion of desgined lacoste😃. 
                                      <br>  Click on for more to see more!!!😉.
                                    </p>
                                    <a href="#" class="btn btn-lg btn-danger">
                                        <i class="fa fa-shopping-cart pr-2"></i>For More...
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
                </div>


            </main>

 <?php  include_once("../footer.php"); ?>
           
        </body>
    </html>

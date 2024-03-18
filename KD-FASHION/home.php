<?php include_once("./connection/dbconnection.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="./css/bootstrap.css">
        <link rel="stylesheet" href="./css/all.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/mdb.min.css">
        <link rel="stylesheet" href="./css/animate.css">
        <title>KD-FASHION</title>
    </head>
    <body>
      <?php include_once("headermain.php"); ?>

            <!-- <main>
                <div class=" container-fluid fast">
                    <div class="row gray wow slideInDown">
                        <div class="col-md-4">
                            <div class="icon-text">
                                <i class="fa fa-money-bill"></i>FAST SECURE PAYMENT
                            </div>
                        </div>
                        <div class="col-md-4 bg-pink">
                            <div class="icon-text">
                                <i class="fa fa-star"></i>PREMIUM PRODUCTS
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-text">
                                <i class="fa fa-truck"></i>FREE & FAST DELIVERY
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Latest Products -->
                <!-- </?php -->
                     <!-- $Men_african_wear= "SELECT * FROM   Men_african_wear  order by Men_african_wear_id desc limit 1"; -->
                     <!-- $Men_official_wear = "SELECT * FROM   Men_official_wear  order by Men_official_wear_id desc limit 1";
                 // Men_african_wear
                   $cat_Men_african_wear = mysqli_query($conn,$Men_african_wear) ;
                 $mycat_Men_african_wear_row = mysqli_fetch_assoc($cat_Men_african_wear);
                  $Men_african_wear_img=$mycat_Men_african_wear_row['Men_african_wear_img'];
                  $newMen_african_wear_img=$Men_african_wear_img;
                  // Men_official_wear
                  $cat_Men_official_wear = mysqli_query($conn,$Men_official_wear) ;
                 $mycat_Men_official_wear_row = mysqli_fetch_assoc($cat_Men_official_wear);
                  $Men_official_wear_img=$mycat_Men_official_wear_row['Men_official_wear_img'];
                  $newMen_official_wear_img=$Men_official_wear_img;?> -->
                <!-- <div class="container">
                    <div class="row">
                        <div class="col-12" id="Latest-Products">
                        <div class="col-12">
                            <h1 class="text-center mt-3 bold coll-head">LATEST PRODUCTS</h1> --> 
<!-- </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card wow fadeInDown">
                                <img src="./images/men african wear/</?php echo $newMen_african_wear_img  ?>" alt="" class="card-img-top img-fluid prod">
                                <div class="card-body">
                                    <h3 class="card-title ">Men African Wear</h3>
                                    <p class="card-text">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni doloremque facere quae veniam totam, suscipit consectetur deserunt iure enim exercitationem, tempora pariatur dolorem!
                                    </p>
                                    <a href="#" class="btn btn-lg btn-danger">
                                        <i class="fa fa-bars pr-2"></i>View More in Collections
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card wow slideInUp">
                                <img src="./images/men official wear/</?php echo $newMen_official_wear_img  ?>" alt="" class="card-img-top img-fluid prod">
                                <div class="card-body">
                                    <h3 class="card-title ">Men Official Wear</h3>
                                    <p class="card-text">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni doloremque facere quae veniam totam, suscipit consectetur deserunt iure enim exercitationem, tempora pariatur dolorem!
                                    </p>
                                    <a href="#" class="btn btn-lg btn-danger">
                                        <i class="fa fa-shopping-cart pr-2"></i>Add to CART
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card wow bounceInDown">
                                <img src="./images/ladies flower designs/IMG-20220324-WA0091.jpg" alt="" class="card-img-top img-fluid prod">
                                <div class="card-body">
                                    <h3 class="card-title ">Product 3</h3>
                                    <p class="card-text">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni doloremque facere quae veniam totam, suscipit consectetur deserunt iure enim exercitationem, tempora pariatur dolorem!
                                    </p>
                                    <a href="#" class="btn btn-lg btn-danger">
                                        <i class="fa fa-shopping-cart pr-2"></i>Add to CART
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card wow shake">
                                <img src="./images/jeans/IMG-20220326-WA0122.jpg" alt="" class="card-img-top img-fluid prod">
                                <div class="card-body">
                                    <h3 class="card-title ">Product 1</h3>
                                    <p class="card-text">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni doloremque facere quae veniam totam, suscipit consectetur deserunt iure enim exercitationem, tempora pariatur dolorem!
                                    </p>
                                    <a href="#" class="btn btn-lg btn-danger">
                                        <i class="fa fa-shopping-cart pr-2"></i>Add to CART
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card wow slideInLeft">
                                <img src="./images/ladies foot/IMG-20220327-WA0049.jpg" alt="" class="card-img-top img-fluid prod">
                                <div class="card-body">
                                    <h3 class="card-title">Product 1</h3>
                                    <p class="card-text">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni doloremque facere quae veniam totam, suscipit consectetur deserunt iure enim exercitationem, tempora pariatur dolorem!
                                    </p>
                                    <a href="#" class="btn btn-lg btn-danger">
                                        <i class="fa fa-shopping-cart pr-2"></i>Add to CART
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card wow rollIn">
                                <img src="./images/men foot wears/rty (1).jpg" alt="" class="card-img-top img-fluid prod">
                                <div class="card-body">
                                    <h3 class="card-title">Product 1</h3>
                                    <p class="card-text">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni doloremque facere quae veniam totam, suscipit consectetur deserunt iure enim exercitationem, tempora pariatur dolorem!
                                    </p>
                                    <a href="#" class="btn btn-lg btn-danger">
                                        <i class="fa fa-shopping-cart pr-2"></i>Add to CART
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card wow slideInRight">
                                <img src="./images/kicks/75546371_NzUwLTczNy1iZTBlNmUzNmU3.jpg" alt="" class="card-img-top img-fluid prod">
                                <div class="card-body">
                                    <h3 class="card-title">Product 1</h3>
                                    <p class="card-text">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni doloremque facere quae veniam totam, suscipit consectetur deserunt iure enim exercitationem, tempora pariatur dolorem!
                                    </p>
                                    <a href="#" class="btn btn-lg btn-danger">
                                        <i class="fa fa-shopping-cart pr-2"></i>Add to CART
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card wow headShake
                            ">
                                <img src="./images/slippers/golden-black-girls-slipper-500x500.jpg" alt="" class="card-img-top img-fluid prod">
                                <div class="card-body">
                                    <h3 class="card-title">Product 1</h3>
                                    <p class="card-text">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni doloremque facere quae veniam totam, suscipit consectetur deserunt iure enim exercitationem, tempora pariatur dolorem!
                                    </p>
                                    <a href="#" class="btn btn-lg btn-danger">
                                        <i class="fa fa-shopping-cart pr-2"></i>Add to CART
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </main> -->





            <footer class="container-fluid footer wow slideInUp slow" role="footer">
<div class="container-fluid bg-dark"> 
<div class="row">
    <div class="col-md-4 services"> <a class="footer-nav " href="#"><img src="./images/brand.jpg" alt="" class="img-fluid rounded pl-2  brand"> <span class="l1  animated shake infinite slow">K</span> <span class="l2 animated shake infinite slow">D</span> <span class="l4 animated shake infinite slow">'</span><span class="l3 pr-2 animated shake infinite slow">S</span>  <span class="l4 pr-2 animated shake infinite slow">FASHION</span> </a>
    <h3 class="footer-text text-light">Services</h3>
<a href="#">
    <a href="#"><li class="text-light">Men African Wears</li> </a>
    <a href="#"><li class="text-light">Men Official Wears</li> </a>
    <a href="#"><li class="text-light">Men Lacoste </li> </a>
  
  </a>  
</div>
    <div class="col-md-4 social-media"><h3 class="footer-text text-light">Our Social Media Handles</h3>
        <a href="#">
            <li class="text-light"><i class="fab fa-facebook pr-2"></i>KD'S FASHION@facebook.com</li></a>
            <a href="#"><li class="text-light"><i class="fab fa-instagram pr-2"></i>KD'S FASHION</li> </a>
            <a href="#"><li class="text-light"><i class="fab fa-tiktok pr-2"></i>KD'S FASHION@tiktok</li></a>
            <a href="#"><li class="text-light"><i class="fab fa-twitter pr-2"></i>KD'S FASHION@twitter</li></a>
          </div>
          <div class="col-md-4">
            <h3 class="footer-text text-light contact" id="contact">Contact Us</h3>
            <address> <p class="footer-text text-light">CALL: <a href="tel: +233-55-379-0731" class="text-light">CALL  US</a> </p>
            <p class="footer-text text-light">WhatsApp: <a href="https://wa.me/+233553790731" class="text-light" target="_blank">WHATSAPP US</a> </p>
            <p class="footer-text text-light">Location: <iframe class="embed-responsive-item "  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.0721870087464!2d-1.5947681!3d6.7610525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdbbe0941a8acf5%3A0x9da2564bdcf5825b!2sAhwiaa%20Market!5e0!3m2!1sen!2sgh!4v1656989256586!5m2!1sen!2sgh"  width="100%" height="100px" frameborder="0" style="border:0"></iframe>
            </p>
            </address>
    </div>
    </div>
    <div class="container-fluid bg-primary text-light text-center  dig">Designed by: Nana Kofi &copy; 2023</div>


            </footer>
            <script src="./scripts/jquery-slim.min.js"></script>
            <script src="./scripts/popper.min.js"></script>
            <script src="./scripts/bootstrap.min.js"></script>
            <script src="./scripts/mdb.min.js"></script>
            <script src="./scripts/wow.js"></script>
            <script>
              var wow = new WOW({
                boxClass: 'wow',
                animateClass: 'animated',
                offset:         0,
                mobile:true,
                live:true,
                callback: function(box){

},
scrollContainer:null,
resetAnimation:true,
              }
              );
              wow.init();
            </script>
            <script>
              $(window).scroll(function(){
                var scroll = $(window).scrollTop();
                if(scroll < 900){
                  $('.fixed-top').css('background', 'transparent')
                }
                else{
                  $('.fixed-top').css('background', 'rgba(0, 0, 147, 0.7)');
                }
              })
            </script>
        </body>
    </html>

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
<header role="head">
            <nav class="navbar navbar-expand-md navbar-dark  fixed-top">
                <a class="navbar-brand " href="#"><img src="./images/brand.jpg" alt="" class="img-fluid rounded pl-2  brand"> <span class="l1  animated shake slow">K</span> <span class="l2 animated shake slow">D</span> <span class="l4 animated shake slow">'</span><span class="l3 pr-2 animated shake slow">S</span>  <span class="l4 pr-2 animated shake slow">FASHION</span> </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarsExample04"
                    aria-controls="navbarsExample04"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <i class="fas fa-bars text-light"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample04">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link rounded" href="#">HOME
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-light" href="./item_collections/collections.php">LATEST PRODUCTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="./item_collections/collections.php">COLLECTIONS</a>
                        </li>
                        <li class="nav-item ">
                          <a class="nav-link text-light " href="#contact">CONTACT</a>
                        </li>
                        <li class="nav-item ">
                          <a class="nav-link text-light " href="./admin/admin_home.php">ADMIN ONLY</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- slide show -->
            <div class="container-fluid p-0">
                <div id="carouselExampleIndicator" class="carousel slide " data-ride="carousel">
                    <div class="carousel-indicators">
                        <li
                            data-target="#carouselExampleIndicators"
                            data-slide-to="0"
                            class="active"
                            aria-current="true"
                        ></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-slide-to="2" aria-label="Slide 3"></li>
                       
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="./images/men african wear/<?php echo $newMen_african_wear_img  ?>" class="d-block w-100" alt="...">
                            <div class="carousel-caption  d-md-block">
                                <p class="heading animated flipInX delay-1s">Welcome to KD'S FASHION</p>
                                <p class="sub-heading animated rollIn  delay-2s">Explore  collections of Our Men African Wear</p>
                                <a href="./item_collections/collections.php" class="btn btn-lg btn-danger mt-5 animated infinite bounce delay-3s">EXPLORE MORE <i class="fa fa-arrow-down pl-2"></i></a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./images/men official wear/<?php echo $newMen_official_wear_img  ?>" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-md-block">
                                <p class="heading animated flipInX  delay-1s">Welcome to KD'S FASHION</p>
                                <p class="sub-heading animated rollIn  delay-2s">Enjoy  collections of Our Men OFFICIAL Wear</p>
                                <a href="./item_collections/collections.php" class="btn btn-lg btn-danger mt-5 animated infinite bounce delay-3s">EXPLORE MORE <i class="fa fa-arrow-down pl-2"></i></a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./images/kicks/2_1_3e14228c-f78d-45ff-8bde-4e27a88bf915.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-md-block">
                                <p class="heading animated flipInX   delay-1s">Welcome to KD'S FASHION</p>
                                <p class="sub-heading animated rollIn  delay-2s">Explore  collections of Our Lacostes</p>
                                <a href="./item_collections/collections.php" class="btn btn-lg btn-danger mt-5 animated infinite bounce delay-3s">EXPLORE MORE <i class="fa fa-arrow-down pl-2"></i></a>
                            </div>
                        </div>
                        <a
                            class="carousel-control-prev"
                            role="button"
                            data-target="#carouselExampleIndicator"
                            data-slide="prev"
                        >
                        <span  aria-hidden="true"><i class="fas fa-arrow-left text-light"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a
                            class="carousel-control-next"
                            role="button"
                            data-target="#carouselExampleIndicator"
                            data-slide="next"
                        >
                            <span  aria-hidden="true"><i class="fas fa-arrow-right text-light"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </header>
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
       </header>

       <main>
<!-- add item to jumb suit -->
<div class="container-fluid collect">
    <div class="row">
                        <div class="col-12"> 
                            <h5 class="text-center  coll-head bold">ADMIN SECTION</h5><hr>
                        </div> 
                       
</div>
</div>
<div class="container coll-sections ">
<?php 
                        include_once("../connection/dbconnection.php");
                        $Men_african_wear= "SELECT * FROM   Men_african_wear  order by Men_african_wear_id desc limit 1";
                        $Men_official_wear = "SELECT * FROM   Men_official_wear  order by Men_official_wear_id desc limit 1";
                    // Men_african_wear
					  $cat_Men_african_wear = mysqli_query($conn,$Men_african_wear) ;
					$mycat_Men_african_wear_row = mysqli_fetch_assoc($cat_Men_african_wear);
					 $Men_african_wear_id=$mycat_Men_african_wear_row['Men_african_wear_id'];
					 $newMen_african_wear_id=$Men_african_wear_id+1;
					 // Men_official_wear
                     $cat_Men_official_wear = mysqli_query($conn,$Men_official_wear) ;
					$mycat_Men_official_wear_row = mysqli_fetch_assoc($cat_Men_official_wear);
					 $Men_official_wear_id=$mycat_Men_official_wear_row['Men_official_wear_id'];
					 $newMen_official_wear_id=$Men_official_wear_id+1;?>



<div class="maw">
    <form action="Men_african_wear.php" method="post">
        
    <h3>ADD TO MEN AFRICAN WEAR COLLECTION</h3>
    <div class="row">
            <div class="col-md-2">
                  <label for="MAW-No.">Men African Wear No.<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-2">
                  <input class="form-control " type="text" name="MAW_No" placeholder="Patient Id"  value="<?php echo $newMen_african_wear_id; ?>"  required readonly> 
                  </div>
                  <div class="col-md-2">
                  <label for=""> Men African Wear IMG<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-3">
                  <input class="form-control" type="file" name="MAW_img" > 
                  </div>
                  </div>
                  <br>
    <div class="row">
            
                  <div class="col-md-1">
                  <label for="">Description<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-3">
                  <input class="form-control" type="text" name="Description" placeholder="Descripe Item" required >
                  </div>
                  <div class="col-md-1">
                  <label for="">Price<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-2">
                  <input class="form-control" type="text" name="Price" placeholder="Enter Price" required> 
                  </div>
                  <div class="col-md-2">
                  <button  class="btn btn-primary "  type="submit">ADD Image </button>
                  </div>
                  </div>
                 
    </form>
    </div>
<div class="maw">
    <form action="Men_african_wear.php" method="post">
        
    <h3>DELETE FROM MEN OFFICIAL WEAR COLLECTION</h3>
    <div class="row">
            <div class="col-md-2">
                  <label for="MAW-No.">Men African Wear No.<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-2">
                  <input class="form-control " type="text" name="MAW_No" placeholder="Patient Id"  value="<?php echo $newMen_african_wear_id; ?>"  required readonly> 
                  <button  type="button" style="margin-left:4px;"class="btn btn-primary"  data-toggle="modal" data-target="#myModal1"><i class=" fa fa-search"></i></button>
                 
                  </div>
                  <div class="col-md-2">
                  <label for=""> Men African Wear IMG<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-3">
                  <input class="form-control" type="file" name="MAW_img" > 
                  </div>
                  </div>
                  <br>
    <div class="row">
            
                  <div class="col-md-1">
                  <label for="">Description<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-3">
                  <input class="form-control" type="text" name="Description" placeholder="Descripe Item" required >
                  </div>
                  <div class="col-md-1">
                  <label for="">Price<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-2">
                  <input class="form-control" type="text" name="Price" placeholder="Enter Price" required> 
                  </div>
                  <div class="col-md-2">
                  <button  class="btn btn-primary "  type="submit">ADD Image </button>
                  </div>
                  </div>
                 
    </form>
    </div>
    <br>
    <div class="maw1">
    <form action="Men_official_wear.php" method="post">
        
    <h3>ADD TO MEN OFFICIAL WEAR COLLECTION</h3>
    <div class="row">
            <div class="col-md-2">
                  <label for="MOW-No.">Men Oficial Wear No.<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-2">
                  <input class="form-control " type="text" name="MOW_No" placeholder="Patient Id"  value="<?php echo $newMen_official_wear_id; ?>"  required readonly> 
                  </div>
                  <div class="col-md-2">
                  <label for=""> Men OFFICIAL Wear IMG<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-3">
                  <input class="form-control" type="file" name="MOW_img" > 
                  </div>
                  </div>
                  <br>
    <div class="row">
            
                  <div class="col-md-1">
                  <label for="">Description<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-3">
                  <input class="form-control" type="text" name="Description" placeholder="Descripe Item" required >
                  </div>
                  <div class="col-md-1">
                  <label for="">Price<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-2">
                  <input class="form-control" type="text" name="Price" placeholder="Enter Price" required> 
                  </div>
                  <div class="col-md-2">
                  <button  class="btn btn-primary "  type="submit">ADD Image </button>
                  </div>
                  </div>
    </form>
</div>
    <div class="maw">
    <form action="Men_official_wear.php" method="post">
        
    <h3>ADD TO MEN OFFICIAL WEAR COLLECTION</h3>
    <div class="row">
            <div class="col-md-2">
                  <label for="MOW-No.">Men Oficial Wear No.<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-2">
                  <input class="form-control " type="text" name="MOW_No" placeholder="Patient Id"  value="<?php echo $newMen_official_wear_id; ?>"  required readonly> 
                  </div>
                  <div class="col-md-2">
                  <label for=""> Men OFFICIAL Wear IMG<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-3">
                  <input class="form-control" type="file" name="MOW_img" > 
                  </div>
                  </div>
                  <br>
    <div class="row">
            
                  <div class="col-md-1">
                  <label for="">Description<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-3">
                  <input class="form-control" type="text" name="Description" placeholder="Descripe Item" required >
                  </div>
                  <div class="col-md-1">
                  <label for="">Price<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-2">
                  <input class="form-control" type="text" name="Price" placeholder="Enter Price" required> 
                  </div>
                  <div class="col-md-2">
                  <button  class="btn btn-primary "  type="submit">ADD Image </button>
                  </div>
                  </div>
    </form>
</div>
    <div class="maw1">
    <form action="Men_official_wear.php" method="post">
        
    <h3>ADD TO MEN OFFICIAL WEAR COLLECTION</h3>
    <div class="row">
            <div class="col-md-2">
                  <label for="MOW-No.">Men Oficial Wear No.<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-2">
                  <input class="form-control " type="text" name="MOW_No" placeholder="Patient Id"  value="<?php echo $newMen_official_wear_id; ?>"  required readonly> 
                  </div>
                  <div class="col-md-2">
                  <label for=""> Men OFFICIAL Wear IMG<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-3">
                  <input class="form-control" type="file" name="MOW_img" > 
                  </div>
                  </div>
                  <br>
    <div class="row">
            
                  <div class="col-md-1">
                  <label for="">Description<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-3">
                  <input class="form-control" type="text" name="Description" placeholder="Descripe Item" required >
                  </div>
                  <div class="col-md-1">
                  <label for="">Price<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-2">
                  <input class="form-control" type="text" name="Price" placeholder="Enter Price" required> 
                  </div>
                  <div class="col-md-2">
                  <button  class="btn btn-primary "  type="submit">ADD Image </button>
                  </div>
                  </div>
    </form>
</div>
    <div class="maw">
    <form action="Men_official_wear.php" method="post">
        
    <h3>ADD TO MEN OFFICIAL WEAR COLLECTION</h3>
    <div class="row">
            <div class="col-md-2">
                  <label for="MOW-No.">Men Oficial Wear No.<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-2">
                  <input class="form-control " type="text" name="MOW_No" placeholder="Patient Id"  value="<?php echo $newMen_official_wear_id; ?>"  required readonly> 
                  </div>
                  <div class="col-md-2">
                  <label for=""> Men OFFICIAL Wear IMG<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-3">
                  <input class="form-control" type="file" name="MOW_img" > 
                  </div>
                  </div>
                  <br>
    <div class="row">
            
                  <div class="col-md-1">
                  <label for="">Description<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-3">
                  <input class="form-control" type="text" name="Description" placeholder="Descripe Item" required >
                  </div>
                  <div class="col-md-1">
                  <label for="">Price<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-2">
                  <input class="form-control" type="text" name="Price" placeholder="Enter Price" required> 
                  </div>
                  <div class="col-md-2">
                  <button  class="btn btn-primary "  type="submit">ADD Image </button>
                  </div>
                  </div>
    </form>
</div>
    <div class="maw1">
    <form action="Men_official_wear.php" method="post">
        
    <h3>ADD TO MEN OFFICIAL WEAR COLLECTION</h3>
    <div class="row">
            <div class="col-md-2">
                  <label for="MOW-No.">Men Oficial Wear No.<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-2">
                  <input class="form-control " type="text" name="MOW_No" placeholder="Patient Id"  value="<?php echo $newMen_official_wear_id; ?>"  required readonly> 
                  </div>
                  <div class="col-md-2">
                  <label for=""> Men OFFICIAL Wear IMG<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-3">
                  <input class="form-control" type="file" name="MOW_img" > 
                  </div>
                  </div>
                  <br>
    <div class="row">
            
                  <div class="col-md-1">
                  <label for="">Description<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-3">
                  <input class="form-control" type="text" name="Description" placeholder="Descripe Item" required >
                  </div>
                  <div class="col-md-1">
                  <label for="">Price<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-2">
                  <input class="form-control" type="text" name="Price" placeholder="Enter Price" required> 
                  </div>
                  <div class="col-md-2">
                  <button  class="btn btn-primary "  type="submit">ADD Image </button>
                  </div>
                  </div>
    </form>
</div>
    <div class="maw">
    <form action="Men_official_wear.php" method="post">
        
    <h3>ADD TO MEN OFFICIAL WEAR COLLECTION</h3>
    <div class="row">
            <div class="col-md-2">
                  <label for="MOW-No.">Men Oficial Wear No.<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-2">
                  <input class="form-control " type="text" name="MOW_No" placeholder="Patient Id"  value="<?php echo $newMen_official_wear_id; ?>"  required readonly> 
                  </div>
                  <div class="col-md-2">
                  <label for=""> Men OFFICIAL Wear IMG<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-3">
                  <input class="form-control" type="file" name="MOW_img" > 
                  </div>
                  </div>
                  <br>
    <div class="row">
            
                  <div class="col-md-1">
                  <label for="">Description<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-3">
                  <input class="form-control" type="text" name="Description" placeholder="Descripe Item" required >
                  </div>
                  <div class="col-md-1">
                  <label for="">Price<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-2">
                  <input class="form-control" type="text" name="Price" placeholder="Enter Price" required> 
                  </div>
                  <div class="col-md-2">
                  <button  class="btn btn-primary "  type="submit">ADD Image </button>
                  </div>
                  </div>
    </form>
</div>
    <div class="maw1">
    <form action="Men_official_wear.php" method="post">
        
    <h3>ADD TO MEN OFFICIAL WEAR COLLECTION</h3>
    <div class="row">
            <div class="col-md-2">
                  <label for="MOW-No.">Men Oficial Wear No.<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-2">
                  <input class="form-control " type="text" name="MOW_No" placeholder="Patient Id"  value="<?php echo $newMen_official_wear_id; ?>"  required readonly> 
                  </div>
                  <div class="col-md-2">
                  <label for=""> Men OFFICIAL Wear IMG<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-3">
                  <input class="form-control" type="file" name="MOW_img" > 
                  </div>
                  </div>
                  <br>
    <div class="row">
            
                  <div class="col-md-1">
                  <label for="">Description<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-3">
                  <input class="form-control" type="text" name="Description" placeholder="Descripe Item" required >
                  </div>
                  <div class="col-md-1">
                  <label for="">Price<span style="color:#FF0000">*</span></label>
                  </div>
                  <div class="col-md-2">
                  <input class="form-control" type="text" name="Price" placeholder="Enter Price" required> 
                  </div>
                  <div class="col-md-2">
                  <button  class="btn btn-primary "  type="submit">ADD Image </button>
                  </div>
                  </div>
    </form>
</div>
       </main>

    
       <?php  include_once("../footer.php"); ?>
       <div class="gf">
       <div class="modal  fade" id="myModal1" role="dialog" >
  <div class="modal-dialog" width="50px">
    <!-- Modal content-->
    <div style="margin-top:20%;" class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Item Search</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <input type="text" class="form-control" placeholder="UHID" id="spatient_id">
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" placeholder="	Patient Name" id="spatient_name">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6">
            <input type="text" class="form-control" placeholder="DOB" id="sdob">
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Mobile No." id="smobile">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6">
            <select class="form-control" id="scity">
              <option value="">City</option>
             


	
            </select>
          </div>
          <div class="col-md-6"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary searchpatient">Search</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Clear</button>
        </div>
        <br>
        <div id="searchpt" >
                <?php $DMen_offcial_wear = " select * from Men_official_wear order  by Men_official_wear_id DESC";
    $DMen_offcial_wearresult = mysqli_query($conn, $DMen_offcial_wear);
    $count=mysqli_num_rows($DMen_offcial_wearresult); 
    $DMen_offcial_wearresult_row = mysqli_fetch_assoc($DMen_offcial_wearresult);
   ?>
              <div class="container" >
                <div class="row">
                    <div class="col-md-6">
              <table class="table table-striped" > 

    <thead>

      <tr style="background:#f1f1f1;">

        <th>Select</th>

        <th>N0.</th>

        <th>Image</th>

        <th>Desription </th>

        <th>Price</th>

        

      </tr>

    </thead>

    <tbody>
    </div>
    </div>
    </div>

     <?php if($count>0)

	{

	while($DMen_offcial_wearresult_row = mysqli_fetch_array($DMen_offcial_wearresult)){

       echo "<tr>";

       echo  "<td>"."<a href='patient_registrationupdate.php?id=<?php echo ;?>' title='click to select'><img src='../images/select.png/ '>'</a>"."</td>";

        echo "<td>" . $DMen_offcial_wearresult_row['Men_official_wear_id']. "</td>";

        echo "<td>" . $DMen_offcial_wearresult_row['Men_official_wear_img']. "</td>";

      echo  "<td>"  . $DMen_offcial_wearresult_row['Description']."</td>";

      echo  "<td>" . $DMen_offcial_wearresult_row['price']. "</td>";

      

    echo " </tr>";
	
     

     }}  else {
        
        echo "<tr>";

        echo  "<td>" ."No Record Found"."</td>";
     }
        ?>
    

    </tbody>

  </table>
 

  </div>
</div>
      </div>
    </div>
  </div>
</div>
</div>
    </body>
  
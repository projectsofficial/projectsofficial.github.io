<?php
  session_start(); 
  
 $Email = $_SESSION['email1'];
 $First_name = $_SESSION['first_name'] ;
 $Phone_no =  $_SESSION['Phone_no'] ;
 $Last_name =  $_SESSION['last_name'] ;
 $Amount = 100;
 $_SESSION["Amount"] =  $Amount; 
 

?>
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
        <title>BeMyDate</title>
      
    </head>
    <body>
        <header role="head">
          <nav class="navbar navbar-expand-lg  top-nav" aria-label="Tenth navbar example">
            <div class="container-fluid col-sm-12 w-100">
              <div class="col-sm-6 logo">BeMyDate</div>
              <div class="col-sm-6" id="nav-icon">
                <div class="icon">
                  <span><i class="fa fa-share" ></i></span>     
                  <span><i class="fa fa-bars"></i></span>
                </div>
               
              </div>
            </div>
          </nav>
          <nav class="navbar navbar-expand-lg  top-nav " aria-label="Tenth navbar example">
         
            <div class="container-fluid col-sm-12 w-100">
              
        
              <div class=" nav2">
                <ul>
                  <li><a href="./dashboard.php" id="current">HOME </a></li>
                  <li><a href="">SEARCH </a></li>
                  <li><a href="">LIKES </a></li>
                  <li><a href="">MATCH </a></li>
                </ul>
              </div>
            </div>
          </nav>
          
            </header>

            <main role="main">
           
            <div class="conatiner-fluid p_backg bg-primary text-center w-100 h-100">
                <h2 class="text-white">VIP FEE</h2>
                <p>Hello <?php echo $Email; ?>valued customer kindly make a payment of 100cedis to subscribe to our monthly subscription</p>
                <form action="">
                <script src="https://js.paystack.co/v1/inline.js"></script>
                <button type="button" class="btn btn-lg btn-success" onclick="payWithPaystack()"> Pay </button>
                   </form>
                </div>
            </main>


            <footer  role="footer">

            </footer>
                
                   <script>
                
                function payWithPaystack(){
      const api = "pk_test_8f1a27084476ba40a7784052b258255134f8df74";
      var handler = PaystackPop.setup({
key: api,
email: '<?php echo $Email; ?>',
amount: <?php echo $Amount * 100; ?>, 
currency: "GHS", 
ref: ''+Math.floor((Math.random() * 1000000000) + 1),
$First_name:"<?php echo $First_name; ?>" ,
$Last_name:"<?php echo $Last_name; ?>" ,
metdata: {
  custom_fields: [
    {
      display_name: '<?php echo $First_name; ?>',
      Variable_name: '<?php echo $Last_name; ?>',
      value: <?php echo $Phone_no; ?>,
    }
  ]
},
callback: function(response) {
  const referenced = response.reference; 
  window.location.href='customers.php?successfullypaid='+ referenced;
},
onClose: function() {
 alert('window closed');
  
}
});
handler.openIframe();
}
                   </script>
            <script src="./scripts/jquery-slim.min.js"></script>
            <script src="./scripts/popper.min.js"></script>
            <script src="./scripts/bootstrap.min.js"></script>
            <script src="./scripts/all.js"></script>
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






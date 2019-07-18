<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8 ">
            <meta name='viewport' content='width=device-width, initial-scale=1'>
        
            <script src="js/bootstrap.js"></script>
            <link rel="stylesheet" href="style.css" >
            <script src="js/bootstrap.bundle.js"></script>
            <link rel="stylesheet" href="css/bootstrap.min.css" >
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> </script>
            <script src="js/bootstrap.min.js" ></script>
            <style>
              

            </style>

    </head>

    <body>
       
<!-- navigation-->
 <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
     <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="" style="width:100px;" style="height: 100px;"></a>
      <div style="color: green">
            <i><h3>DAIRY DEPARTMENT</h3></i>
 
            </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarResponsive">
            <span class="navbar-toggle-icon"></span>
            

        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="index.php#container-fluid">Services</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="index.php#contacts">Contacts</a>
                    </li>
                <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                 </li>
                 
                 </ul>
        </div>
     </div>
 </nav>
 <!--imageSlider-->
 <div id="slides" data-ride="carousel">
     <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1" ></li>
        <li data-target="#slides" data-slide-to="2" ></li>
     </ul>
     <div class="carousel-inner">
         <div class="carousel-item active">
                <img src="img/6.jpg" style="width:100%;"style="height:100%">
             <div class="carousel-caption">
                 <h1 class="display-2">Egerton University</h1>
                 <h3>Dairy Department</h3>
                 
                  <a href="signup.php" class="btn btn-outline-light btn-lg">REGISTER</a> 
                <!-- <button type="button" class="btm btn-primary btn-lg">LOG IN</button>-->
                 <a href="login.php" class="btn btn-primary btn-lg">LOG IN</a>
             </div>
         </div>
         <div class="carousel-item">
             <img src="img/6.jpg" style="width:100%;"style="height:100%">
    
         </div>
         <div class="carousel-item">
            <img src="img/6.jpg" style="width:100%;" style="height:100%;">
   
        </div>
     </div>
 </div>
 
 <!--jumbotron-->
 <!--
 <div class="contaiiner-fluid">
     <div class="row jumbotron">
         <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
             <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
             <a href="#"><button type="button" class="btn btn-outline-secondary btn-lg"></button></a>
         </div>
     </div>
 </div>
-->
 <!-- welcome section-->

 <div class="container-fluid padding" id="container-fluid">
     <div class="row welcome text-center">
         <div class="col-12">
             <h1 class="display-4">Get Our Services with Ease</h1>
         </div>
         <div class="col-12">
             <p class="lead"></p>

         </div>
     </div>
 </div>
 <!--three column section-->
   <div class="container-fluid padding">
       <div class="row text-center padding">
           <div class=" col -xs-12 col-sm-6 col-md-4 ">
               <i class="fas fa-code">
                   <h3>FARMER</h3>
                   <p>Get the chance to supply milk to Egerton University; Dairy department</p>
                 <!--  <button type="button" class="btm btn-primary btn-lg">SUPPLY</button>-->
                   <a href="login.php" class="btm btn-primary btn-lg">SUPPLY</a> 
               </i>
           </div>
           <div class="col -xs-12 col-sm-6 col-md-4 ">
            <i class="fas fa-bold">
                <h3>CUSTOMER</h3>
                <p>Buy our quality milk products at your convenience</p>
                <!--<button type="button" class="btm btn-primary btn-lg">BUY</button>-->
                <a href="login.php" class="btm btn-primary btn-lg">BUY</a> 
            </i>
        </div>
        
        </div>
       </div>
   </div>

   <!--connect-->
   <!--
      <div class="container-fluid padding">
          <div class="row text-center padding">
              <div class="col-12">
                  <h2> Connect</h2>
              </div>
              <div class="col-12 social padding">
                  <a href="#"><i class="fab fa-facebook"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-google-plus-g"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
              </div>
          </div>
      </div>
      -->
      <!--footer-->

     
      <footer id="footer" style="background-color: #778899">

          <div class="container-fluid padding">
              <div class="row text-center">
                  <div class="col-mod-4" style="color: white">
                 <!-- <img src="../dist/img/6.jpg">-->
                 <hr class="light" id="contacts">
                 <h5>Contacts</h5>
                  <hr class="light">
                  <p>0711-111-111</p>
                  <p>egertondairy@egerton.ac.ke</p>
                  <p>PO. Box 34562789 Egerton</p>
                  <p>Nakuru, Kenya</p>
              </div>
                
              <div class="col-md-4" style="color: white">
                  <hr class="light">
                  <h5>Our hours</h5>
                  <hr class="=light">
                  <p>Monday-Friday:8am-5pm</p>
                  <p>Sartuday:Closed</p>
                  <p>Sunday:Closed</p>
              </div>
              <div class="col-md-4" style="color: white">
                <hr class="light">
                
               
              </div>
            </div>
          </div>
        </footer>
      
    
    </body>
</html>
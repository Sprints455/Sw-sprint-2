<?php

 session_start();
//error_reporting(0);

$userprofile=	$_SESSION['username'];
if($userprofile == true)
{
    
}
else
{
    	header('location:login1.php');
}
 

 include "Admin.php";

$A = new Admin();
 
?>
<html> 
  <head>
      <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/index_style.css">
        <link href="https://fonts.googleapis.com/css?family=Alex+Brush|Pacifico&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/cart.css">
  </head>
    
    <body>
        
        <div class="hiddenList "> 
         <ul>
           <li class="py-3 px-2">
                         <a class="myhome" href="product.php"> Home</a>

           </li>
           <li class="py-3 px-2">
              <a class="account" href="task2.html">My Account</a>
            </li>
             
            
           <li class="py-3 px-2">
              <a class="account" href="register1.php">Sign In</a>
            </li>
           <li class="py-3 px-2">
              <a class="account" href="register1.php">Create new account Now</a>
            </li>
              <li class="py-3 px-2">
              <a class="account" href="task2.html">My Cart</a>
            </li>
          
              <li class="py-3 px-2">
              <a class="logout" href="login1.php">logout</a>
            </li>                

        
                           
                           
         </ul>
         

       </div>
       <div class="clearfix"></div>
       <div class="webSite"> 
           
         <div class="back">
            <a class="section_scroll scroll  ptup" href="#"><i class="fa fa-angle-up fa-4x fa-"></i></a>
         </div>
           
        <nav class="navbar navO navbar-expand-lg navbar-light bg-light py-0  "> 
           <span class="navbar-toggler-icon firstTog mx-3"></span> 
           
              <a class="navbar-brand mr-0 ml-3" href="product.php">The Giftery</a><img class="logo" src="images/images.png"> 
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            
               <div class="collapse navbar-collapse" id="navbarSupportedContent">

                 <form class="position-relative mx-3 from">
                <input class="form-control inp" id="searchInp" type="search">
                <i class="fa fa-search position-absolute "></i>
                 </form>
                  <a href="#"><i class="fab fa-opencart fa-2x ml-5 ico"></i></a> 
             <a class="nav-link cartLink ml-2 mr-5" href="task.html">MyCart</a>
             <a class="nav-link ico" href="#"> <i class="far fa-user ml-4 ico"></i></a>
             <a href="login1.php" class="signLink mr-1 pr-3 py-1 border-right sign">SignIn</a>
             <a class="nav-link ml-2 mr-5 join" href="register1.php"> JoinUs</a> 
             <a class="nav-link" href="#"> <i class="fa fa-cog fa-2x ml-5 pl-3 ico"></i></a>
             </div>
            </nav>
        
           
          <section class="home" id="home">
    <div class="row">
              <div class="col-md-12 my-2 py-2">
                  <?php
              
                 $result= $A-> view_feedback_A();
           foreach ((array) $result as $data) {
                $uname= $data['sp2_username'];
                $uinfo= $data['sp2_info'];
               
                  echo '
                  <div class="bg-light py-2">
                  <h2 class="mx-4">UserName:'.$uname.'</h2>
                  <p class="text-center">'.$uinfo.'</p></div> <br>';
           }?>
        
              </div>
              
              </div>
              
              
         </section>
           
           
            <section class="final"   >
            <div class="container-fluid">
                <div class="row  justify-content-start">
                    <div class="col-md-3 pt-3">
                      <h5>
                          POPULAR SEARCHES
                      </h5>
                      <ul>
                        <li><a href="#">
                            Fashion</a>
                        </li>
                        <li><a href="#">
                            Accessories</a>
                        </li>
                        <li><a href="#">
                            Mugs</a>
                        </li>
                        <li><a href="#">
                            Love</a>
                        </li>
                        <li><a href="#">
                           Valentine</a>
                        </li>
                        <li><a href="#">
                            Birthday</a>
                        </li>
                        <li><a href="#">
                            Games</a>
                        </li>
                        <li><a href="#">
                           Perfume</a>
                        </li>
                        <li><a href="#">
                            Box</a>
                        </li>

                      </ul>
              </div>
              <div class="col-md-3 pt-3">
                  <h5>
                      MY ACCOUNT
                  </h5>
                  <ul>
                    <li><a href="register1.php">
                        Log In / Register</a>

                    </li>
                    <li><a href="#">
                        My Shopping Cart</a>

                    </li>
                    <li><a href="#">
                        My Orders</a>
                       
                    </li>
                    <li><a href="#">
                        My Addresses</a>
                        
                    </li>
                    <li><a href="#">
                        Wish Lists</a>
                        
                    </li>
                    <li><a href="#">
                        Account Settings</a>
                      
                    </li>

                  </ul>

                      
                </div>
                <div class="col-md-3 pt-3">

                    <h5>
                        SELLING ON THEGIFTERY.COM
                    </h5>
                    <ul>
                      <li><a href="#">
                          Sell on thegiftery.com</a>
                      </li>
                      <li><a href="#">
                         How It Works</a>
                      </li>
                      <li><a href="#">
                        Selling Policies</a>
     
                      </li>
                      <li><a href="#">
                          Seller Terms and Conditions </a>
                  
                      </li>
                    </ul>
  
                    <h5>
                        BUYING ON THEGIFTERY.COM
                    </h5>
                    <ul>
                      <li><a href="#">
                          How to Buy</a>

                      </li>
                      <li><a href="#">
                          Return Policy</a>
                      </li>
                      <li><a href="#">
                          Advertise with us</a>
                      </li>
                      <li><a href="#">
                          Help</a>
                  
                      </li>
                    </ul>
  
                        
                  </div>
                  <div class="col-md-3 pl-5 pt-5">
                      <h5 class="text-center pb-3">
                          FOLLOW US
                      </h5>

                      <div class="social m-auto">
                          <ul class="social_ico mr-auto d-flex justify-content-start ">
                            <li><a href="#"><i class="fab fa-fw fa-facebook-f fa-2x"></i></a></li>
                            <li><a href="#"><i class="fab fa-fw fa-twitter fa-2x"></i></a></li>
                            <li><a href="#"><i class="fab fa-fw fa-google-plus-g  fa-2x  "></i></a></li>
                            <li><a href="#"><i class="fab fa-fw fa-instagram fa-2x"></i></a></li>
                            <li><a href="#"><i class="fab fa-fw fa-youtube fa-2x "></i></a></li>
                            
                          </ul>
                        </div>
                    </div>
            </div>
          </div>
          </section>
        
                  <section class="footer">
            <div class="container d-flex justify-content-start">
                <p class="text-secondary pt-2 ">Copyright © 2020 UIGRID | All Rights Reserved | 
                  <a href="product.php" class="text-primary text-decoration-none">www.thegiftery.com</a></p>
           
            </div>
        </section>
        </div>
    <script src="js/jquery-3.3.1.min.js"></script>   
            <script src="js/popper.min.js"></script>    
            <script src="js/bootstrap.min.js"></script>
            <script src="js/owl.carousel.min.js"></script> 
            <script src="js/wow.js"></script> 
            <script src="pro11.js"></script> 
    </body>
</html>




<?php

 session_start();
error_reporting(0);

$userprofile=	$_SESSION['username'];
if($userprofile == true)
{
    
}
else
{
    	header('location:login1.php');
}
 

 include "user.php";

 $p=new User();


 if(isset($_POST['Leave_Comment']))
{
      
    $comment=$_POST['comment'];
    $p->InsertFeedbacku($userprofile,$comment);

}



$conection=mysqli_connect("localhost","root","","sw2_sprint2") or die("could not find ");


if(isset($_POST['search_btn']))
{
    $search_text=$_POST['search_text'];
    $sql="SELECT * FROM product  WHERE name='$search_text'";
$query =mysqli_query($conection,$sql) or die("not found");
    $result='';
    $counter = mysqli_num_rows($query);
    if($counter>0)
    {
        
        while($data =mysqli_fetch_assoc($query))
        {
                $id=$data['id'];
                $pname= $data['name'];
                $pdesc= $data['product_desc'];
                $pimg= $data['img'];
                $price= $data['price'];
            $result .=
                '    
                
                <div class=" text-center mx-auto py-4 mt-3 search_containt" style="border-bottom: 2px solid black ; ">
                
                
                <div class="col-md-4 my-2  m-auto"> 
                
            <i class="fa fa-times close" aria-hidden="true"></i>
              <div class="card  mx-auto  " style="width: 20rem;">
      
                    <img name="c_img" src="images/'.$pimg.'" class="card-img-top img-fluid img" alt="'.$pimg.'">
            <div class="card-body text-center">
                        <h5 class="card-title cname " name="c_name" >'.$pname.'</h5>
                        <p class="card-text cdesc" name="c_desc">'.$pdesc.'</p>
                        <p class="card-text fa-2x cprice" name="c_price">'.$price.'.00EGP </p>
               <button name="ADD_To_Cart" type="submit"  class="btn btn-primary cart"> ADD To Cart</button>
            </div>
      
       
            </div>
            </div>
            </div>
            <br>
            <br>' ;
        }
        
    }
    else
    {
        $result ="invalid data";
    }
      
}
?>


<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/index_style.css">
        <link href="https://fonts.googleapis.com/css?family=Alex+Brush|Pacifico&amp;display=swap" rel="stylesheet">
     </head>
    
    <body>
       <div class="hiddenList "> 
         <ul>
           <li class="py-3 px-2">
                         <a class="myhome" href="product.php"> Home</a>

           </li>
           <li class="py-3 px-2">
              <a class="account" href="cartdb.php">My Account</a>
            </li>
             
            
           <li class="py-3 px-2">
              <a class="account" href="register1.php">Sign In</a>
            </li>
           <li class="py-3 px-2">
              <a class="account" href="register1.php">Create new account Now</a>
            </li>
              <li class="py-3 px-2">
              <a class="account" href="cartdb.php">My Cart</a>
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
               
                 </form>
                  <a href="#"><i class="fab fa-opencart fa-2x ml-5 ico"></i></a> 
             <a class="nav-link cartLink ml-2 mr-5" href="cartdb.php">MyCart</a>
             <a class="nav-link ico" href="#"> <i class="far fa-user ml-4 ico"></i></a>
             <a href="login1.php" class="signLink mr-1 pr-3 py-1 border-right sign">SignIn</a>
             <a class="nav-link ml-2 mr-5 join" href="register1.php"> JoinUs</a> 
             <a class="nav-link" href="#"> <i class="fa fa-cog fa-2x ml-5 pl-3 ico"></i></a>
             </div>
            </nav>
     
          <section class="home" id="home">
            <form  method="post" class="form-inline  float-right mt-4">
      <input  name="search_text" class="form-control mr-2 mt-1" type="text" placeholder="Search" >
   <input name="search_btn" type="submit" id="btn " value="search" class="btn searchbtn btn-primary mr-3 mt-1" />
    </form>

             <?php print("$result") ; ?> 

            
          
              
            <div class="container text-center py-5">
          <div class="row my-5  justify-content-center align-items-center  ">
                <?php
              
                 $result= $p->displayproudect_u();
           foreach ((array) $result as $data) {
               $id=$data['id'];
                $pname= $data['name'];
                $pdesc= $data['product_desc'];
                $pimg= $data['img'];
                $price= $data['price'];

        
              echo '<div class="col-md-4 my-2 "> 
              <div class="card  mx-auto  " style="width: 18rem;">
       
                    <img name="c_img" src="images/'.$pimg.'" class="card-img-top img-fluid img" alt="'.$pimg.'">
            <div class="card-body text-center">
                        <h5 class="card-title cname " name="c_name" >'.$pname.'</h5>
                        <p class="card-text cdesc" name="c_desc">'.$pdesc.'</p>
                        <p class="card-text fa-2x cprice" name="c_price">'.$price.'.00EGP </p>
                           <form method="post" >
<input style="display:none;" class="hidden" type="text" name="c_pid" value="'.$id.'"/>
               <button name="Push_Into_Cart" type="submit"  class="btn btn-primary cart"> ADD To Cart</button>
            </div>
             
       </form>
       
            </div>
            </div>' ;
             }?>
            

                </div>
                  </div>
              
              
              
              <div class="feedback">
        <div class="container my-5 text-center">
           <h4>Leave a meaningful comment </h4>
            <form method="post" class="py-5 my-5">
     <textarea name="comment" id="textarea" class="form-control" type="text" 
               placeholder="Enter Message "> </textarea> 
                <button id="send" name="Leave_Comment" type="submit" class="btn btn-info mt-3"> Send</button>
           </form>  
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
            <script src="js/search1.js"></script>  
   
    </body>
</html>

<?php  if(isset($_POST['Push_Into_Cart']))
{
      
    $c_pid=$_POST['c_pid'];
  
   
    $p->Push_into_Cart_u($userprofile,$c_pid);

}
?>
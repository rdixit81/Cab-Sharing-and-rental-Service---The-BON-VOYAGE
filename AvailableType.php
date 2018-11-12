<?php include('user_regis.php');?>
<!DOCTYPE html>
<html>
<head>
    <title>E-Book</title>
  <link rel='stylesheet' type='text/css' href='style.css'>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
  <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
  <script src="js/login_sms.js"></script>
  <script
        src="http://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
        <script src="https://sdk.accountkit.com/en_US/sdk.js"></script>
<style>
  body, html {
    height: 100%;
    margin-top: 0px;
    font: 400 15px/1.8 "Lato", sans-serif;
    color: #777;
  }

  .bgimg-1, .bgimg-2, .bgimg-3 {
    position: relative;
    opacity: 0.9;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
   

  }
  .bgimg-1 {
    background-image: url("img/img14.jpg");
    min-height: 500px;
    height: 30%;
  }

  .bgimg-2 {
    background-image: url("img/b2.jpg");
    min-height: 300px;
  }

  .bgimg-3 {
    background-image: url("img/indexbg2.jpg");
    min-height: 600px;
  }
  .form-submit-btn{
    width: 120px;
    height: 50px;
    background-color: rgb(232, 53, 53);
    border: none;
    margin-top: 20px;
    margin-left: -40px;
    color: white;
    font-size: 20px;
    border-radius: 25px;
    font-weight: bold;
    ali
  }

  h3 {
    letter-spacing: 5px;
    text-transform: uppercase;
    font: 20px "Lato", sans-serif;
    color: #111;
  }

  /* Turn off parallax scrolling for tablets and phones */
  @media only screen and (max-device-width: 1024px) {
      .bgimg-1, .bgimg-2, .bgimg-3 {
          background-attachment: scroll;
      }
  }
  #grad1 {
      background-color: red; /* For browsers that do not support gradients */
      background-image: linear-gradient(to bottom right,rgb(107, 28, 31), #BA3D42 , rgb(107, 28, 31)); /* Standard syntax (must be last) */
  }
</style>
</head>


<body>
    <nav class="navbar navbar-fixed-top" id="nav"
         style="border-bottom-color: red;
                height: 52px;
                background-color: white;
                ">
        <div class="container">
            <div class="navbar-header" id="logo">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#mynav">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                <a href="#" class="navbar-brand" style="color:#ff0000">The Bon Voyage</a>
            </div>
            <a href="about.php" target="by_view"><ul class="nav navbar-nav navbar-left">
                     <li style="background-color: #ff0000;color:white; height: 51px; width: 100px;
                         padding: 12px;">
                     <center>About</center></li>
            </ul></a>
            <a href="contact.php"><ul class="nav navbar-nav navbar-left">
                     <li style="background-color: #fff;color:red; height: 51px; width: 100px;
                         padding: 12px;">
                     <center>Contact</center></li>
            </ul></a>
            <div class="dropdown nav navbar-nav navbar-left">
                <button class="dropbtn" style="background-color:red;
            color: white;">Looking For</button>
                <div class="dropdown-content">
                    <a href="outstation.php">Outstation Cabs</a>
                    <a href="outstationCabSharing.php">Outstation Cab Sharing</a>
                    <a href="carsOnRent.php">Cars on Rent</a>
                    <a href="deals.php">Exciting Deals</a>
                </div>
            </div>
            <?php if(isset($_SESSION['users'])):?>
            <div class="dropdown nav navbar-nav navbar-left">
            <button class="dropbtn" style="width: 500px;background-color:white;color: red;height: 51px">Shopping Cart</button>
                <div class="dropdown-content" style="width: 500px;">
                    <?php
               $total = 0;
               $quantity=0;
               $username = $_SESSION['userid'];
               $itemInCart = True;
               if($itemInCart){
                  $query = "SELECT b.title,b.price FROM dashboard1 b,cart c WHERE b.isbn=c.book_id AND c.userid = $username";
                  $result = mysqli_query($con,$query);
                  if(mysqli_num_rows($result) > 0)
                  {
                     while($row = mysqli_fetch_array($result))
                     {
                     ?>
                     <a style="text-decoration: none;font-size: 120%;" class="no-link"><?php echo "$row[0]";?><span style="position: relative;float: right;"><?php echo "&#8377;$row[1]"; ?></span></a>
                     <?php
                     $quantity = $quantity + 1;
                     $total = $total + $row[1];
                  }
               }
            }
            ?>
                    <a class="checkout" href="oncheckout.php" style="text-align: center;font-size: 120%;color: green;font-weight: bold;">Proceed to Checkout</a>
                </div>
            </div>
            
            
            <div class="nav navbar-nav navbar-right" id="mynav1">
                <div class="dropdown">
                  <button class="dropbtn" style="background-color:red;color: white;"><span class="glyphicon glyphicon-user"> </span> <?php echo $_SESSION['users']?> 
                  </button>
               <div class="dropdown-content">
                    <a href="logout.php"><span class="glyphicon glyphicon-log-out"> </span> Logout    </a>
                    <a href="account.php"><span class="glyphicon glyphicon-cog"> </span> My Account</a>
                    
                </div>
                </div>
                
                <div style="width: 120px;"></div>
               <!-- <li>
                    
                </li> -->       
            </div>
            <?php else:?>
            <ul class="nav navbar-nav navbar-right" id="mynav">
               
               
                <li>
                    <a href="signup.php" target="by_view" style="background-color: #ff0000;color:white;"><span class="glyphicon glyphicon-user"> </span> Sign Up    </a>
                </li> 
                <li>
                    <a data-toggle="modal" data-target="#mymodal" style="background-color: #fff;color:red;" ><span class="glyphicon glyphicon-log-in"> </span> Login</a>
                </li>       
            </ul> <?php endif;?>
        </div>
        </nav>
    
    <div class="modal" id="mymodal">
    <div id="login-box" class="animate">
    
      <div class="left-box">
        <h1> Login </h1>
        <form method="post" action="index.php">
            <?php include('errors.php');?>
            <input type="text" name="email" placeholder="Email" required/>
            <input type="password" name="password" placeholder="Password" required/>
          <input type="submit" name="login" value="Login"/>
        </form>
      </div>
        <?php
      if(isset($_SESSION['username'])):
      ?>
      <p>Hello <?=$_SESSION['username']?>. You're logged In.</p>
      <p><a href="response.php?logout=true">Logout</a>
      <?php
      else:
      ?>
      <div>
          <form method="post" action="response.php" id="frm_login">          
          <input type="hidden" name="login"/>
          <input type="hidden" name="code" id="login_code"/>
          <input type="hidden" name="login_via" id="login_via"/>
        </form>
          
      </div>
      <?php endif; ?> 
            
        
     </div>
        
    </div>
    </div>
  
   <div class="bgimg-1" style="height: 50%">
    <div class="row" >
        <div class="col-xs-8"> 
        </div> 
        <div class="col-xs-4" style="padding-top:100px; "> 
            <h1 style="font-size:400%;color: #F7F7F5; text-align: left;">We are always<span style="color:red;"> ready with Your</span> Comfortable <span style="color:red;"> Rides</span>
            </h1>      
        </div> 
    </div>
</div>
<form action="requestToBook2.php" method="POST">
<div style="position:relative;">
  <div style="color:#fff;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <h3 style="text-align:center;color: #fff">Everyday Plans</h3>
    <center><p><b>“Travel makes one modest. You see what a tiny place you occupy in the world.” -Gustav Flaubert</b></p></center><br>
    <div class="row">
        <div class="col-sm-1">
         </div>
        <div class="col-sm-2">
            <div class="thumbnail" id="grad1" style=" height: 200px;padding: 10px;border:0px ;color: white;">
                <center>
                  <span style="color: white;font-size:180%;">Small Cars</span><br>
                  <span style="font-size: 130%;position: relative;top:30px;">Starts at Just</span><br><br>
                  <span style="color:rgb(58, 232, 58);font-size: 300%;">&#8377;1500</span>
                  <input type="radio" name="Select" value="Select"> Select<br>
                </center>
            </div>
         </div>
         <div class="col-sm-2">
             <div class="thumbnail" id="grad1" style=" height: 200px;padding: 10px;border:0px ;color: white;">
                <center>
                  <span style="color: white;font-size:140%;">Medium Cars</span><br>
                  <span style="font-size: 130%;position: relative;top:30px;">Starts at Just</span><br><br>
                  <span style="color:rgb(58, 232, 58);font-size: 300%;">&#8377;1900</span>
                  <input type="radio" name="Select" value="Select"> Select<br>
                </center>
            </div>
         </div>
         <div class="col-sm-2">
            <div class="thumbnail" id="grad1" style=" height: 200px;padding: 10px;border:0px ;color: white;">
                <center>
                  <span style="color: white;font-size:180%;">Large Cars</span><br>
                  <span style="font-size: 130%;position: relative;top:30px;">Starts at Just</span><br><br>
                  <span style="color:rgb(58, 232, 58);font-size: 300%;">&#8377;2500</span>
                  <input type="radio" name="Select" value="Select"> Select<br>
                </center>
            </div>
        </div>
        <div class="col-sm-2">
           <div class="thumbnail" id="grad1" style=" height: 200px;padding: 10px;border:0px ;color: white;">
                <center>
                  <span style="color: white;font-size:140%;">Premium Cars</span><br>
                  <span style="font-size: 130%;position: relative;top:30px;">Starts at Just</span><br><br>
                  <span style="color:rgb(58, 232, 58);font-size: 300%;">&#8377;4000</span>
                  <input type="radio" name="Select" value="Select"> Select<br>
                </center>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="thumbnail" id="grad1" style=" height: 200px;padding: 10px;border:0px ;color: white;">
                <center>
                  <span style="color: white;font-size:180%;">SUVs</span><br>
                  <span style="font-size: 130%;position: relative;top:30px;">Starts at Just</span><br><br>
                  <span style="color:rgb(58, 232, 58);font-size: 300%;">&#8377;3500</span>
                  <input type="radio" name="Select" value="Select"> Select<br>
                </center>
            </div>
        </div>
  </div>
  <center>
        <button type="submit" class="form-submit-btn">Submit</button>
        </center>
  </div>
</div>
    <div style="position:relative;">
  <div style="color:#fff;background-color:rgb(10, 39, 68);text-align:center;padding:50px 80px;text-align: justify;">
    <h3 style="text-align:center;color: #fff">Prices at special offers for You</h3>
    <center><p><b>“Remember that happiness is a way of travel – not a destination.” -Roy M. Goodman</b></p></center><br>
    <div class="row">
        <div class="col-sm-1">
         </div>
        <div class="col-sm-2">
            <div class="thumbnail" id="grad1" style=" height: 200px;padding: 10px;border:0px ;color: white;">
                <center>
                  <span style="color: white;font-size:180%;">Small Cars</span><br>
                  <span style="font-size: 130%;position: relative;top:30px;">Starts at Just</span><br><br>
                  <span style="color:rgb(58, 232, 58);font-size: 300%;">&#8377;1200</span>
                  <input type="radio" name="Select" value="Select"> Select<br>
                </center>
            </div>
         </div>
         <div class="col-sm-2">
             <div class="thumbnail" id="grad1" style=" height: 200px;padding: 10px;border:0px ;color: white;">
                <center>
                  <span style="color: white;font-size:145%;">Medium Cars</span><br>
                  <span style="font-size: 130%;position: relative;top:30px;">Starts at Just</span><br><br>
                  <span style="color:rgb(58, 232, 58);font-size: 300%;">&#8377;1800</span>
                  <input type="radio" name="Select" value="Select"> Select<br>
                </center>
            </div>
         </div>
         <div class="col-sm-2">
            <div class="thumbnail" id="grad1" style=" height: 200px;padding: 10px;border:0px ;color: white;">
                <center>
                  <span style="color: white;font-size:180%;">Large Cars</span><br>
                  <span style="font-size: 130%;position: relative;top:30px;">Starts at Just</span><br><br>
                  <span style="color:rgb(58, 232, 58);font-size: 300%;">&#8377;2200</span>
                  <input type="radio" name="Select" value="Select"> Select<br>
                </center>
            </div>
        </div>
        <div class="col-sm-2">
           <div class="thumbnail" id="grad1" style=" height: 200px;padding: 10px;border:0px ;color: white;">
                <center>
                  <span style="color: white;font-size:145%;">Premium Cars</span><br>
                  <span style="font-size: 130%;position: relative;top:30px;">Starts at Just</span><br><br>
                  <span style="color:rgb(58, 232, 58);font-size: 300%;">&#8377;3500</span>
                  <input type="radio" name="Select" value="Select"> Select<br>
                </center>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="thumbnail" id="grad1" style=" height: 200px;padding: 10px;border:0px ;color: white;">
                <center>
                  <span style="color: white;font-size:180%;">SUVs</span><br>
                  <span style="font-size: 130%;position: relative;top:30px;">Starts at Just</span><br><br>
                  <span style="color:rgb(58, 232, 58);font-size: 300%;">&#8377;3000</span>
                  <input type="radio" name="Select" value="Select"> Select<br>
                </center>
            </div>
        </div>
  </div>
  <center>
        <button type="submit" class="form-submit-btn">Submit</button>
        </center>
  </div>
  </div>
</div>

    <div style="background-color: #000;height: 50px;padding: 10px;color: white;">
        <center><p>Copyright © The Bon Voyage. All Rights Reserved | Contact Us: +91 90000 00000</p></center>
    </div>
<?php
if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
  echo "<script type='text/javascript'>alert('".$_SESSION['message']."');</script>";
  $_SESSION['message'] = '';
}
?>
    
</body>
</html>
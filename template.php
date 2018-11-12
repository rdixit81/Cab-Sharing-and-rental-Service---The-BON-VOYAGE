<html>
<head>
        <title>Out Station Cabs</title>
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
        </head>
        <style type="text/css">
                .container2{
                        background-image:url("img/books-back.jpg"); 
                        min-height: 650px;
                }
        </style>
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
                <a href="index.php" class="navbar-brand" style="color:#ff0000">The Bon Voyage</a>
            </div>
            <a href="about.php" target="by_view"><ul class="nav navbar-nav navbar-left">
                     <li style="background-color: #ff0000;color:white; height: 51px; width: 100px;
                         padding: 12px;">
                     <center>About</center></li>
            </ul></a>
            <a href="#"><ul class="nav navbar-nav navbar-left">
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

        <div class="container2">

        </div>
        <div style="background-color: #000;height: 50px;padding: 10px;color: white;">
                <center><p>Copyright © The Bon Voyage. All Rights Reserved | Contact Us: +91 90000 00000</p></center>
        </div>
        </body>
</html>
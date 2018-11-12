<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "ebook");   
if(isset($_POST["submit"])){
	$remove_item = $_POST['submit'];
	$query = "DELETE FROM cart WHERE book_id = $remove_item";
	$result = mysqli_query($connect,$query);
}

?>
<!DOCTYPE html>
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
<style type="text/css">
	body{
		margin:0;	
	}
	.navbar{
		/*
			add navbar css
		*/
		width: 100%;
		height: 50px;
		background-color: red;
	}
	.container2{
		background-image: url("img/img12.jpg");
		background-repeat: no-repeat;
		width: 100%;
		height: 50%;
		padding-bottom: 0px;
		position: relative;
		top: 0;
		left: 0;
	}
	.main-container{
		background-image: url("img/img11.jpg");
		background-repeat: no-repeat;
		width: 100%;
		height:150%;
		padding-bottom: 0px; 
		position: relative;
		top: 0;
		left: 0;
	}
	

	@keyframes popOut{
			from {transform: scale(0)};
			to {transform: scale(1)};
		}

	.review-order-div-bg{
		animation: popOut 2s;
		overflow: auto;
		position: relative;
		float: left;
		top:70px;
		left: 60px;
		width: 900px;
		padding-bottom: 100px;
		background-color: #3D698E; 
		opacity: 0.8;
		border-radius: 35px;
		margin-right: 40px;
	}
	.review-order-div{
		width: 800px;
		padding-bottom: 50px; 
		position: relative;
		top:50px;
		left: 50px;
		background-color: white;
		opacity: 1;
		border-radius: 20px;
		border: groove 5px red;
		min-height: 400px;
	}
	.container4 {
        position: absolute;
        bottom: 8px;
        right: 16px;
        font-size: 24px;
        float: right;
        padding-left: 80%;
        padding-bottom: 20%;
        color: white;
        font-weight: bold;
    }
	.review-heading{
		padding: 30px;
		text-align: center;
		color: black;
                font-size: 30px;
                font-weight:bolder;
                font-family:Georgia;
                
	}
	#heading-hr{
		position: relative;
		top:-40px;
		width: 300px;
		background-color:rgb(242, 37, 26);
		height: 2px;
		border-style: groove;
	}
	.cart-items{
		padding-left:30px;
		padding-right: 30px;
	}
	.book-link{
		color: #3D698E;			
		text-decoration: none;
		font-size: 120%;
		font-family: Georgia;
	}
	
	.review-table,th,td{
		border-collapse: collapse;
		height: 30px;
		border: solid 1px black;
                color: black;
	}
	.book-price{
		font-size: 140%;
	}
	.book-link:hover{
		color: #E35D54;
		font-size: 125%;
	}
	.remove-item{
		text-decoration: none;
		color: black;
		background-color: Transparent;
	    border: none;
	    font-size: 100%;
	}
	.remove-item:hover{
		color: red;
		font-size: 120%;
	}
	.controls{
		position: relative;
		top:-10px;
		overflow: auto;
		width: 100%;
		height: 250px;
	}
	.control-element{
		opacity: 0.8;
		position: relative;
		float: left;
		margin-top: 70px;
		margin-left:240px; 
		width: 320px;
		height: 150px;
		background-color: white;
		border-radius: 25px;
		border:5px solid #3D698E;
		font-size: 250%;
		color: red;
		padding: 5px;
	}
	.link{
		text-decoration: none;
		color: red;
                
	}
	.link:hover{
		color: green;
	}
	.review-image{
		opacity: 0.9;
		width: 200px;
		position: relative;
		left: -600px;
		top: 70px;
		z-index: 1;
		border-radius: 25px;
		transform: rotate(-30deg);
		border:groove red 1px;
	}
	.location-div-bg{
		position: relative;
		top:-65px;
	}
	.delivery-address-div{
		border-radius: 25px;
		background-color: red;
		margin-left: 50px;
		width: 350px;
		padding: 25px;
	}
	.address{
		font-size: 100%;
		color: white;
		font-family: georgia;
	}
	.address-div{
		margin-bottom: 25px;
	}
	.add-address-div{
		margin-top: 70px;
		text-align: center;
		color: white;
	}
	.new-address-btn{
		width: 150px;
		height: 60px;
		border-radius: 15px;
		font-size: 120%;
		background-color:rgb(66, 145, 201);
		color: white;
		outline: none;
		border: none;
		padding: 10px;

	}
	.new-address-btn:hover{
		background-color:rgb(0, 114, 196);
	}
	.animate{
		animation: popOut 1s;
	}
	.form-for-details{
		padding-top: 40px;
		padding-bottom: 0px;
		padding-left: 40px;
		border-radius: 25px;
		margin: 0 auto;
		width: 500px;
		min-height: 300px;
		background-color: rgb(89, 105, 191);
	}
	.form-label{
		color: red;
		font-size: 150%;
		position: relative;
		float: left;
		margin-right: 50px;
		display: block;
		width: 150px;
	}
	.form-inputs{
		padding-left: 10px;
		width: 100px;
		border-radius: 10px;
		height: 15px;
		font-size:200%;
		font-weight: bold;
		border: solid 10px black;
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
	}
	.form-submit-btn:hover{
		background-color: red;
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
	<div style="background-attachment: fixed;" class="main-container">
	<div class="container4">"Travel sparks our imagination, feeds our curiosity, and reminds us how much we all have in common." — Deborah Lloyd
        </div>
		<div style="background-attachment: fixed;" class="container2">
			
		<div class="wrapper">
			
			<div class="review-order-div-bg animate">
				<div class="review-order-div">
					<form action="AvailableType.php" method="POST">
					<center><h2>Let's find your ideal car</h2></center>
					<hr>
					<div class="form-for-details">
						<label class="form-label">Pick-up Location:</label>
						<input list="City" type="text" class="form-inputs" style="font-size: 150%;font-weight: bold;color: black;" placeholder="Source">
						<datalist id="City">
						     <option value="Agra"><option value="Bangalore"> <option value="Bhopal"><option value="Chennai"> <option value="Delhi"><option value="Indore"> <option value="Mumbai"><option value="Mysore"><option value="Pune">  
						 </datalist>
						<label class="form-label">Pick-up Date:</label>
						<input type="text" style="font-size: 150%;font-weight: bold;color: black;" class="form-inputs" placeholder="02/12/2018">
						<label class="form-label">Drop-off Date:</label>
						<input type="text" style="font-size: 150%;font-weight: bold;color: black;" class="form-inputs" placeholder="02/12/2018">
						<label class="form-label">Purpose of rental</label>
						<input type="radio" name="Buisness" value="Buisness"> Buisness<br>
  						<input type="radio" name="Leisure" value="Leisure"> Leisure<br>
						<button type="submit" class="form-submit-btn">Submit</button>
					</form>
					</div>
				</div>
			</div>
        </div>
    
	</div>
	</div>
		<div class="controls">       
		</div>
<div style="background-color: #000;height: 50px;padding: 10px;color: white;">
<center><p>Copyright © The Bon Voyage. All Rights Reserved | Contact Us: +91 90000 00000</p></center>
</div>
</body>
<script type="text/javascript">
	
</script>
</html>
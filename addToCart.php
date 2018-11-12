<?php
	session_start();
	$connect = mysqli_connect("localhost", "root", "", "ebook");
        
	if(isset($_POST["submit"])){
                 $book_id = $_POST['submit'];
	        $userid = $_SESSION['userid'];
		$query = "INSERT INTO cart VALUES($userid,$book_id)";
		$result = mysqli_query($connect,$query);
                echo "<script>alert('book added to cart')</script>";
	}
?>
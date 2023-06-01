<?php
session_start();
include ('conn.php');

if (isset($_POST['uemail']) and isset($_POST['upass'])){
$uemail = $_POST['uemail'];
$upass = $_POST['upass'];

	$sqlA="SELECT * From admin WHERE admin_email='$uemail' and admin_password='$upass'";
	$resultA= mysqli_query($conn, $sqlA);
	$countA= mysqli_num_rows($resultA);

	if ($countA == 1){
  	$_SESSION['logged_user']='True';
  	echo '<script>alert("You logged as Admin");</script>';
  	echo '<script>window.location.href="adindex.html";</script>';

	}else{
		$sqlL = "SELECT * FROM librarian WHERE librarian_email='$uemail' and librarian_password='$upass'";

		$resultL = mysqli_query($conn, $sqlL);
		$countL = mysqli_num_rows($resultL);

	if ($countL == 1){
		$currentuser=mysqli_fetch_assoc($resultL);
		echo '<script>alert("You Logged in as Librarian");</script>';
		echo '<script>window.location.href="liaindex.php";</script>';

	}else{
		$sqlLE = "SELECT * FROM lecturer WHERE lecturer_email='$uemail' and lecturer_password='$upass'";

		$resultLE = mysqli_query($conn, $sqlLE);
		$countLE = mysqli_num_rows($resultLE);

	if ($countLE == 1){
		$currentuser=mysqli_fetch_assoc($resultLE);
		echo '<script>alert("You logged as Lecturer");</script>';
		echo '<script>window.location.href="lecindex.html";</script>';

  }else{
		$sqlS = "SELECT * FROM student WHERE student_email='$uemail' and student_password='$upass'";

		$resultS = mysqli_query($conn, $sqlS);
		$countS = mysqli_num_rows($resultS);

	if ($countS == 1){
		$currentuser=mysqli_fetch_assoc($resultS);
		echo '<script>alert("You logged as Student");</script>';
		echo '<script>window.location.href="stuindex.html";</script>';
  }

	else{
		echo '<script>alert("Invalid Login Credentials. Please try again");</script>';
		echo '<script>window.location.href="login.html"</script>';
  }
  }
  }
  }
}

 ?>

<?php
$username="";
$password="";

if(isset($_POST['butt'])) {

if(isset($_POST['uname'])) {
	$username = $_POST['uname'];
}
if(isset($_POST['pw'])) {
	$password = $_POST['pw'];
}




session_start();

$con=mysqli_connect("localhost","root","","kngine19");//mysqli("localhost","username of database","password of database","database name")
$result=mysqli_query($con,"SELECT * FROM `users` WHERE `username`='$username' && `password`='$password'");
$count=mysqli_num_rows($result);
if($count==1)
{
    $_SESSION['log']=1;
   header("Location: ../admin.php");
}
else
{
	$_SESSION['log']=0;
	echo "<script type='text/javascript'>alert('Username Or Password Invalid');window.location.href='login.html';</script>";
}

}
?>


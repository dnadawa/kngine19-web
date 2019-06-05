<?php
$sclname = "";
$projname = "";
$competitorname = "";
$competitoremail = "";
$competitorconno = "";
$projfile="";


if(isset($_POST['regbtn'])) {

if(isset($_POST['sclname'])) {
	$sclname = $_POST['sclname'];
}
if(isset($_POST['projectname'])) {
	$projname = $_POST['projectname'];
}
if(isset($_POST['competitorname'])) {
	$competitorname = $_POST['competitorname'];
}

if(isset($_POST['email'])) {
	$competitoremaila = $_POST['email'];
}
if(isset($_POST['competitorconno'])) {
	$competitorconno = $_POST['competitorconno'];
}

if(isset($_POST['projfile'])) {
	$projfile = $_POST['projfile'];
}
$db =mysqli_connect("localhost", "root", "", "kngine19");
$msg="";

  	$proj = $_FILES['projfile']['name'];

  	$target = "projects/".basename($proj);
$sql = "INSERT INTO codecom (schoolname,projectname,competitorname,competitoremail,contactnumber,projectfile) VALUES ('$sclname','$projname','$competitorname','$competitoremaila','$competitorconno','$proj')";


	  // execute query
	 $res=mysqli_query($db, $sql);


  	if ((move_uploaded_file($_FILES['projfile']['tmp_name'], $target)) && $res){
		header("Location: ../thanking/Confirmation.html");

		$to = $competitoremaila;
		$subject = "Kngine 19";
		$txt = "Thank You For Register Code_Com 2019";
		$headers = "From: kngine19@gmail.com";

		mail($to,$subject,$txt,$headers);	
	} 
			
  	else{
		//header("Location: ../thanking/Confirm Wrong.html");
		echo "Error: " . $sql . "<br>" . mysqli_error($db);
	  }

}	 

?>

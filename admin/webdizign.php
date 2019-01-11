<?php
session_start();
if($_SESSION['log']==0||$_SESSION['log']==""){
    header("Location: login.html");
}
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "kngine19";
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$textfield="";

$query = "SELECT * FROM `webdezign`";

$result1=mysqli_query($connect,$query);


if(isset($_POST['deletebtn'])) {


if(isset($_POST['textfield'])) {
	$textfield = $_POST['textfield'];
}

$sql= "DELETE FROM webdezign WHERE schoolname='$textfield'";
mysqli_query($connect, $sql);
echo "<meta http-equiv='refresh' content='0;url=webdizign.php'>";
}

?>



<html>

<title>WebDezign Summery</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="icon" type="image/png" href="image/favicon.png"/>
<head>
<style>

#tble{

    margin: auto;
    width: 80%;
    padding: 2%;
    
}
.form-control form-control-lg{
    width:20%;
}
#txtbox{
    width: 90%;
}

</style>

    </head>

    <body>


<div id="tble">
<div class="event_title">
                    <h4>Summery - WebDezign</h4><br>
                </div>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">SchoolName</th>
        <th scope="col">ProjectName</th>
        <th scope="col">CompetitorName</th>
        <th scope="col">CompetitorEmail</th>
        <th scope="col">CompetitorContactNumber</th>
        <th scope="col">ProjectFile</th>

      </tr>
    </thead>
    <?php while($row1 = mysqli_fetch_array($result1)):;?>
    <tr>
        <td><?php echo $row1[0];?></td>
        <td><?php echo $row1[1];?></td>
        <td><?php echo $row1[2];?></td>
        <td><?php echo $row1[3];?></td>
        <td><?php echo $row1[4];?></td>  
        <td><?php echo $row1[5];?></td>  
      </tr>
      <?php endwhile;?>
  </table>

  <form class="form-inline" method="POST" action="webdizign.php">
<div>
  <input type="text" class="form-control form-control-lg" id="txtbox"placeholder="School Name" name="textfield">
</div>
  <button type="submit" class="btn btn-danger mb-2" name="deletebtn">Delete</button>
</form>

  </div>




  </body></html>
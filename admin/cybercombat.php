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


$query = "SELECT * FROM `cybercombat`";

$result1=mysqli_query($connect,$query);


if(isset($_POST['deletebtn'])) {


if(isset($_POST['textfield'])) {
	$textfield = $_POST['textfield'];
}

$sql= "DELETE FROM cybercombat WHERE schoolname='$textfield'";
mysqli_query($connect, $sql);
echo "<meta http-equiv='refresh' content='0;url=cybercombat.php'>";
}

?>



<html>

<title>CyberCombat Summery</title>
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
                    <h4>Summery - CyberCombat</h4><br>
                </div>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">SchoolName</th>
        <th scope="col">TeamName</th>
        <th scope="col">TeamLeaderName</th>
        <th scope="col">TeamLeaderEmail</th>
        <th scope="col" width="10%">TeamLeaderContactNumber</th>
        <th scope="col">Player_1</th>
        <th scope="col">Contact_1</th>
        <th scope="col">Player_2</th>
        <th scope="col">Contact_2</th>
        <th scope="col">Player_3</th>
        <th scope="col">Contact_3</th>
        <th scope="col">Player_4</th>
        <th scope="col">Contact_4</th>
        <th scope="col"></th>
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
        <td><?php echo $row1[6];?></td>
        <td><?php echo $row1[7];?></td>
        <td><?php echo $row1[8];?></td>
        <td><?php echo $row1[9];?></td>
        <td><?php echo $row1[10];?></td>
        <td><?php echo $row1[11];?></td>  
        <td><?php echo $row1[12];?></td>
      </tr>
      <?php endwhile;?>
  </table>

  <form class="form-inline" method="POST" action="cybercombat.php">
<div>
  <input type="text" class="form-control form-control-lg" id="txtbox"placeholder="School Name" name="textfield">
</div>
  <button type="submit" class="btn btn-danger mb-2" name="deletebtn">Delete</button>
</form>

  </div>




  </body></html>
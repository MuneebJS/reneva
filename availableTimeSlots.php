<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "services_technohost";
$tableName = "fl_booking";
$data = '';


if(isset($_POST['date']))
{
    $cal_date = $_POST['date'];

    // Do whatever you want with the $uid
}

// $con=mysqli_connect($servername, $username,,"my_db");
$con= mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// $sql="SELECT Lastname,Age FROM Persons ORDER BY Lastname";
// $sql = "SELECT Booked_slots FROM fl_booking where date='2017-06-23 00:00:00'";
$sql = "SELECT Booked_slots FROM fl_booking where date='$cal_date'";


if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    // printf ("%s (%s)\n",$row[0],$row[1]);
    // printf ("%s (%s)\n",$row[0]);

      // echo $row[0];
      $data .= $row[0]."|";   
      echo $data;
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);
?>
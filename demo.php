 <?php 

  //--------------------------------------------------------------------------
  // Example php script for fetching data from mysql database
  //--------------------------------------------------------------------------



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "services_technohost";
$tableName = "fl_booking";
$data = '';

// if(isset($_POST['check_date']))
// {
//    $date = $_POST['check_date'];
// $date = '2017-06-23 00:00:00';
// }
  // --------------------------------------------------------------------------
  // 1) Connect to mysql database
  // --------------------------------------------------------------------------
 
$con= mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT Booked_slots FROM fl_booking where date='2017-06-23 00:00:00'";
// $sql = "SELECT booked_slots FROM fl_booking where date='".$date."'";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
      // print_r($row);
      // exit;
      // $data .= $row[0];       
      $data .= $row[0]."|";      
      exit
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);
// echo $data;
      // exit;
?> 

<!-- old code which worked properly -->





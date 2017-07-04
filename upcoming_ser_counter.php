<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "services_technohost";


if(isset($_POST['class']))
  {
    $ser_class = $_POST['class'];
   // print_r($ser_class);
}


$con= mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


      if($ser_class == 'driver_counter')
      {
          $sql_query = "select driver_counter ";
      }
      else if($ser_class == 'beautician_counter')
      {
          $sql_query = "select beautician_counter ";
      }
      else if($ser_class == 'maid_counter')
      {
          $sql_query = "select maid_counter ";
      }
      else if($ser_class == 'cook_counter')
      {
          $sql_query = "select cook_counter ";
      }
      else {
        echo $sql_query = "";
      }

      


 $sql = $sql_query." from upcoming_services";


if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  $row=mysqli_fetch_row($result);


      $data = $row[0]; 
      $data++; 


      if($ser_class == 'driver_counter')
      {
          $sql_query = "update upcoming_services set driver_counter= ";
      }
      else if($ser_class == 'beautician_counter')
      {
          $sql_query = "update upcoming_services set beautician_counter= ";
      }
      else if($ser_class == 'maid_counter')
      {
          $sql_query = "update upcoming_services set maid_counter= ";
      }
      else if($ser_class == 'cook_counter')
      {
          $sql_query = "update upcoming_services set cook_counter= ";
      }

      // $sql = '';
      $sql = $sql_query.$data;
      // echo "$data";
      mysqli_query($con, $sql);

}

?>
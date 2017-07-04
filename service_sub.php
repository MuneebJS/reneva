<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "services_technohost";
$tableName = "service_data";
$data = '';

// if(isset($POST['data_service']))
// {
// 	$service = $POST['data_service'];
// }

if(isset($_POST['data_service']))
{
    $service = $_POST['data_service'];
}

if(isset($_POST['data_city']))
{
    $city = $_POST['data_city'];
}
if(isset($_POST['data_address']))
{
    $address = $_POST['data_address'];
}
if(isset($_POST['data_coupon']))
{
    $coupon = $_POST['data_coupon'];
}
if(isset($_POST['data_serDate']))
{
    $serDate = $_POST['data_serDate'];
}
if(isset($_POST['data_serTime']))
{
    $serTime = $_POST['data_serTime'];
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO service_data(service_name, city, address, coupon, date, booked_slots)
VALUES ('$service', '$city', '$address', '$coupon', '$serDate', '$serTime')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
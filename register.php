<?php
require_once 'dbconfig.php';

$db_host = "localhost";
$db_name = "services_technohost";
$db_user = "root";
$db_pass = "";

if($_POST)
{
    
    $con= mysqli_connect($db_host,$db_user,$db_pass,$db_name);
    // Check connection
    if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    // get form input
    $reg_user_first_name = mysqli_real_escape_string($con, $_POST['reg_user_first_name']);
    $reg_user_last_name = mysqli_real_escape_string($con, $_POST['reg_user_last_name']);
    $reg_user_email = mysqli_real_escape_string($con, $_POST['reg_user_email']); 
    $mbl_code  = mysqli_real_escape_string($con, $_POST['mbl_code']);
    $mbl_nmbr  = mysqli_real_escape_string($con, $_POST['mbl_nmbr']);
    $landline_nmbr  = mysqli_real_escape_string($con, $_POST['landline_nmbr']);
    $nic_nmbr  = mysqli_real_escape_string($con, $_POST['nic_nmbr']);
    $reg_add1  = mysqli_real_escape_string($con, $_POST['reg_add1']);
    $reg_add2  = mysqli_real_escape_string($con, $_POST['reg_add2']);
    $reg_cus_city  = mysqli_real_escape_string($con, $_POST['reg_cus_city']);
    $reg_user_pass  = mysqli_real_escape_string($con, $_POST['reg_user_pass']);
    $joining_date   = date('Y-m-d H:i:s');

    
    
    // encryp password
    $mobile_number = $mbl_code . $mbl_nmbr;
    $password = md5($reg_user_pass);
    // print_r($user_name);
    // print_r($mobile_number);

        
    try
    {
        $stmt = $db_con->prepare("SELECT * FROM tbl_customer WHERE Email=:email");
        $stmt->execute(array(":email"=>$reg_user_email));
        $count = $stmt->rowCount();
        
        if($count==0){
            $stmt = $db_con->prepare("INSERT INTO tbl_customer(First_name,Last_name,Email, Mobile_number, Landline_number,NIC, Address_1, Address_2, City, Password, Joining_date) VALUES(:firstname,:lastname, :email, :mbl_nmbr, :landline_nmbr,:nic_nmbr, :reg_add1, :reg_add2, :reg_cus_city, :pass ,:jdate)");
            $stmt->bindParam(":firstname",$reg_user_first_name);
            $stmt->bindParam(":lastname",$reg_user_last_name);
            $stmt->bindParam(":email",$reg_user_email);
            $stmt->bindParam(":mbl_nmbr",$mobile_number);
            $stmt->bindParam(":landline_nmbr",$landline_nmbr);
            $stmt->bindParam(":nic_nmbr",$nic_nmbr);
            $stmt->bindParam(":reg_add1",$reg_add1);
            $stmt->bindParam(":reg_add2",$reg_add2);
            $stmt->bindParam(":reg_cus_city",$reg_cus_city);
            $stmt->bindParam(":pass",$password);            
            $stmt->bindParam(":jdate",$joining_date);

            if($stmt->execute())
            {
                echo "registered";

                exit;
            }
            else
            {
                echo "Query could not execute !";
            }

        }
        else{

            echo "1"; //  not available
        }

    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}
// echo "string";
?>


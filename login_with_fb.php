

<?php
require_once 'dbconfig.php';

$db_host = "localhost";
$db_name = "services_technohost";
$db_user = "root";
$db_pass = "";

if($_POST)
{
    
    $con= mysqli_connect($db_host, $db_user,$db_pass,$db_name);
    // Check connection
    if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    // get form input
    $reg_user_first_name = mysqli_real_escape_string($con, $_POST['id']);
    $reg_user_last_name = mysqli_real_escape_string($con, $_POST['firstName']);
    $reg_user_email = mysqli_real_escape_string($con, $_POST['lastName']); 
    $mbl_code  = mysqli_real_escape_string($con, $_POST['email']);
    $reg_user_gender  = mysqli_real_escape_string($con, $_POST['gender']);
    $joining_date   = date('Y-m-d H:i:s');

    
    
    // encryp password
    // $mobile_number = $mbl_code . $mbl_nmbr;
    // $password = md5($reg_user_pass);
    // print_r($user_name);
    // print_r($mobile_number);

        
    try
    {
        $stmt = $db_con->prepare("SELECT * FROM tbl_customer WHERE Email=:email");
        $stmt->execute(array(":email"=>$reg_user_email));
        $count = $stmt->rowCount();
        
        if($count==0){
            $stmt = $db_con->prepare("INSERT INTO tbl_customer(First_name,Last_name,Email, Gender, Joining_date) VALUES(:firstname,:lastname, :email, :gender, :jdate)");
            $stmt->bindParam(":firstname",$reg_user_first_name);
            $stmt->bindParam(":lastname",$reg_user_last_name);
            $stmt->bindParam(":email",$reg_user_email);
            $stmt->bindParam(":gender",$reg_user_gender);
            // $stmt->bindParam(":landline_nmbr",$landline_nmbr);
            // $stmt->bindParam(":reg_add1",$reg_add1);
            // $stmt->bindParam(":reg_add2",$reg_add2);
            // $stmt->bindParam(":reg_cus_city",$reg_cus_city);
            // $stmt->bindParam(":pass",$password);            
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


<?php
 session_start();
 require_once 'dbconfig.php';

 // if(isset($_POST['btn_login']))
  if($_POST)

 {
  $user_email = trim($_POST['login_email']);
  $user_password = trim($_POST['login_pass']);
  //print_r($_POST);
  //exit;
  $password = md5($user_password);
  // $password = "202cb962ac59075b964b07152d234b70";
  // print_r($user_email);
  try
  { 
  
   $stmt = $db_con->prepare("SELECT * FROM tbl_customer WHERE Email=:email AND Password=:password");
   $stmt->execute(array(":email"=>$user_email,":password"=>$password));
   // $stmt->execute(array(":email"=>'atif@gmail.com'));
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $count = $stmt->rowCount();
   //print_r($row);
   //exit;
   if($row['Password'] == $password){
   // if($row['Password']=="202cb962ac59075b964b07152d234b70"){
    //echo "ok"; // log in
    // $row[0]="ok";
$myJSON = json_encode($row);
    // echo json_encode($row);
    echo $myJSON;
    exit;
    // return $row; 
    // $firstName = $row['First_name'];
    // $email = $row['Email'];
    // echo $email .  firstname;
    // exit;
    $_SESSION['firstname'] = $row['First_name'];
   }
   else{
    
    echo "email or password does not exist."; // wrong details 
   }
    
  }
  catch(PDOException $e){
   echo $e->getMessage();
   echo "hello";
  }
 }

 // echo "success";
?>

     
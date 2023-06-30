<?php
   include '../config/conn.php';
   session_start();
   
   $email = $_POST['email'];
   $pass = $_POST['pass']; 
   
   $user = "select * from page where Gmail='".$email."' AND Password='".$pass."'";
   $query = mysqli_query($conn, $user);
   
   //print_r($query);
   
   if($query->num_rows > 0){
	   $row = mysqli_fetch_assoc($query);
	   $_SESSION['token'] = $row['Id'];
	   echo 1 ;
   }  else {
	   echo 2;
   }   
	   
   

?>
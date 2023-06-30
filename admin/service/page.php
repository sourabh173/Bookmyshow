<?php
    include '../config/conn.php';
	
	$name = $_POST['f_name'];
	$phone = $_POST['f_phone'];
	$gmail = $_POST['f_gmail'];
	$password = $_POST['f_password'];
	$city = $_POST['f_city'];
	$state = $_POST['f_state'];
	$pincode = $_POST['f_pincode'];
	$date = date('y-m-d');
	$action = $_POST['f_action'];
	
	
	if($action == 'insert'){
	$sql = "insert into page(Id, Name, Phone, Gmail, Password, City, State, Pincode, Status, CreatedDate)values('', '".$name."', '".$phone."', '".$gmail."', '".$password."', '".$city."', '".$state."', '".$pincode."', 1, '".$date."')";
	
	$qry = mysqli_query($conn, $sql);
	 
	 if($qry == 1){
		 echo 'success';
	 }else{
		 echo 'error';
	 }

	}
	
	
	if($action == 'update'){
	$Id = $_POST['f_id'];
	$sql = 'update page set Name="'.$name.'", Phone="'.$phone.'", Gmail="'.$gmail.'", Password="'.$password.'", City="'.$city.'", State="'.$state.'", Pincode="'.$pincode.'" where id="'.$Id.'" ';
		
	$qry = mysqli_query($conn, $sql);
	 
	 if($qry == 1){
		 echo 'success';
	 }else{
		 echo 'error';
	 }	
		
		
	}
	
?>
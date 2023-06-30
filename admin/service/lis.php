<?php
      include '../config/conn.php';


		$filename = $_POST['categoryfile'];
		$categoryname = $_POST['categoryname'];			
		$date = date('Y-m-d');
		$action = $_POST['action'];
		
		
		
		if($action == 'insert'){
			$sql = "insert into lis (Id, CategoryName, CategoryFile, Status, CreatedDate) values('', '".$categoryname."', '".$filename."', 1, '".$date."')";
			
			$qry = mysqli_query($conn, $sql);
		
			if($qry == 1){
				echo 'success';
			} 
			else {
				echo 'error';
			}
		}
		
		
		
		if($action == 'update'){
			 $Id = $_POST['id'];
			 $sql = 'update lis set  CategoryName="'.$categoryname.'", CategoryFile="'.$filename.'" where id="'.$Id.'"'; 
			 $qry = mysqli_query($conn, $sql);
			 echo $qry;
			 
			 if($qry == 1){
				 echo 'success';
			 }   
			 else{
				 echo 'error';
			 }
		}

?>
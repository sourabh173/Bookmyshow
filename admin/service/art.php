<?php
   include '../config/conn.php';
   
   $artistname = $_POST['f_artistname'];
   $fileartist = $_POST['fileartist'];
   $occupation = $_POST['f_occupation'];
   $aboutartist = $_POST['f_aboutartist'];
   $date = date('y-m-d');
   $action = $_POST['f_action'];
	
	
	
   if($action == 'insert'){
   $sql = "insert into artist (Id, ArtistName, ArtistImage, Occupation, Aboutartist, Status, CreatedDate) values ('', '".$artistname."', '".$fileartist."', '".$occupation."', '".$aboutartist."', 1, '".$date."') ";


	   $qry = mysqli_query($conn, $sql);
	   
	   if($qry == 1){
		   echo 'success';
	   }   else {
		   echo 'error';
	   } 
	   
	   
   }

   
	   
   
   if($action == 'update'){
	  $Id = $_POST['f_id'];
	  $sql = 'update artist set ArtistName="'.$artistname.'", ArtistImage="'.$artistimage.'", Occupation="'.$occupation.'", Aboutartist="'.$aboutartist.'" where id="'.$Id.'"  ';
	   
	   $qry = mysqli_query($conn, $sql);
		   
		   if($qry == 1){
			   echo 'success';
		   }   else {
			   echo 'error';
		   } 
		   
   
      }
   
   
   
   
   
   

?>
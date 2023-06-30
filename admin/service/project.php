<?php
     include '../config/conn.php';
	 
	 $categoryid = $_POST['f_categoryid'];
	 $eventsname = $_POST['f_eventsname'];
	 $eventsdate = $_POST['f_eventsdate'];
	 $eventsprice = $_POST['f_eventsprice'];
	 $filename = $_POST['f_listimage'];
	 $fileimage = $_POST['f_detailsimage'];
	 $discription = $_POST['f_discription'];
	 $aboutus = $_POST['f_aboutus'];
	 $date = date('y-m-d');
	 $action = $_POST['f_action'];
	 $artist = $_POST['f_artist'];
	 
	 
			      
	 
	 //echo($event);
	 
	 if($action == 'insert'){
	 $sql = "insert into project (Id, CategoryId, EventsName, EventsDate, EventsPrice, ListImage, DetailsImage, Discription, Aboutus, Artistid, Status, CreatedDate) values ('', '".$categoryid."', '".$eventsname."', '".$eventsdate."', '".$eventsprice."', '".$filename."', '".$fileimage."', '".$discription."', '".$aboutus."', '".$artist."', 1, '".$date."')";
	 
	 
	 $qry = mysqli_query($conn, $sql);
	 
	
		if($qry == 1){
			echo 'success';
		} else {
			echo 'error';
		}

	 }
	 
	 
	 
	 
	 
	 if($action == 'update'){
		$Id = $_POST['f_id'];
		$sql = 'update project set  CategoryId="'.$categoryid.'", EventsName="'.$eventsname.'", EventsDate="'.$eventsdate.'", EventsPrice="'.$eventsprice.'", ListImage="'.$filename.'", DetailsImage="'.$fileimage.'", Discription="'.$discription.'", Aboutus="'.$aboutus.'" where id="'.$Id.'" ';
		 
		$qry = mysqli_query($conn, $sql);
		
		if($qry == 1){
			echo 'success';			
		}   else{
			echo 'error';
		}
		
		
	    }
	 
	 
?>
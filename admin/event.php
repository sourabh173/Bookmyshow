<?php
    include 'config/conn.php';
	
$Id = null;
$row = null;

if(isset($_GET['key'])){
	 
	 $Id = $_GET['key'];
	 $getdata = 'select * from project where Id ="'.$Id.'"';
	 $qry = mysqli_query($conn, $getdata);
	 $row = mysqli_fetch_assoc($qry);
	 
}

	 
	$artist = 'select * from artist';
	$art_query = mysqli_query($conn, $artist);
		


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
   <style>
      #discription{height:100px;}
      #aboutus{height:100px;}
   </style>
 <?php include 'include/head.php';?>
 
 
 
 
</head>

<body class="g-sidenav-show  bg-gray-200" style="background:red; importanat">
  
 
  <?php include 'include/aside1.php';?>
  
  <?php include 'include/center.php';?>
 
 
    
		<div class="container-fluid py-0" style=" padding-left:200px;"> 
		<div class="card" style="width:900px; margin:auto;">
		  <div class="card-header"><h3>Add Events</h3></div>
		  <div class="card-body">
				<div class="row">
					   <div class="col-md-6">
						   <div class="form-group">
								<label for="categoryid" class="form-label"><h6>Category Id</h6></label>
								<input type="text" class="form-control px-3" placeholder="Enter your categoryid" id="categoryid" style="border: 2px solid;" value="<?php echo $row != null ? $row['CategoryId'] : '' ?>">
						   </div>				   
					   </div>
					   <div class="col-md-6">
						   <div class="form-group">
								<label for="artistid" class="form-label"><h6>Artistfield</h6></label>
								<select id="example-getting-started" multiple="multiple">
									<?php
										while($art_array = mysqli_fetch_array($art_query))
										{
											
										?>
										<option value="<?php echo $art_array['Id']?>"> <?php echo $art_array['ArtistName']?> </option>
										<?php
										}
										?>
								</select>
						   </div>				   
					   </div>
						<div class="col-md-6">
						   <div class="form-group">
								<label for="eventsname" class="form-label"><h6>Events Name</h6></label>
								<input type="text" class="form-control px-3" placeholder="Enter your eventsname" id="eventsname" style="border: 2px solid;" value="<?php echo $row !=null ? $row['EventsName'] : ''; ?>">
						   </div>				   
					   </div>					  					  
					   <div class="col-md-6">
						   <div class="form-group">
							   <label for="eventsdate" class="form-label"><h6 style="margin-top:30px;">Events Date</h6></label>
							   <input type="date" class="form-control px-3" placeholder="Enter your eventsdate" id="eventsdate" style="border: 2px solid;" value="<?php echo $row !=null ? $row['EventsDate'] : ''; ?>">
						   </div>
					   </div>
					    <div class="col-md-6">
						   <div class="form-group">
							   <label for="eventsprice" class="form-label"><h6 style="margin-top:30px;">Events Price</h6></label>
							   <input type="text" class="form-control px-3" placeholder="Enter your eventsprice" id="eventsprice" style="border: 2px solid;" value="<?php echo $row !=null ? $row['EventsPrice'] :''; ?>">
						   </div>
					   </div>
					   <div class="col-md-12 mt-2">
					     
						 <?php 
								if($row){
							?>
								<div id="showimg" class="mt-2"><img src="<?php echo 'image/list_image/'.$row['ListImage']; ?>" width="100px" height="100px" /></div>
							<?php
								} else {
							?>
								<div id="showimg"></div>
							<?php
								}
							?>
						 
							<div class="form-group">
								<label for="listimage" class="form-label"><h6 style="margin-top:30px;">List Image</h6></label>
								<input type="file" class="form-control bg-light" placeholder="Enter Category listimage" id="listimage" style="border: 2px solid;" >
								<input type="hidden" class="form-control-file" id="filename" value="<?php echo $row != null ? $row['ListImage'] : ''; ?>">
							</div>                                                           
					   </div>					   
					    <div class="col-md-12">	
						  
						  <?php 
								if($row){
							?>
								<div id="show" class="mt-2"><img src="<?php echo 'image/detail_image/'.$row['DetailsImage']; ?>" width="100px" height="100px" /></div>
							<?php
								} else {
							?>
								<div id="show"></div>
							<?php
								}
							?>
						 
						  
						  
							<div class="form-group">
								<label for="detailsimage" class="form-label"><h6 style="margin-top:30px;">Details Image</h6></label>
								<input type="file" class="form-control bg-light" placeholder="Enter Category detailsimage" id="detailsimage" style="border: 2px solid;" >
								 <input type="hidden" class="form-control-file" id="fileimage" value="<?php echo $row != null ? $row['DetailsImage'] : ''; ?>" >
							</div>
					   </div>
					    <div class="col-md-12">
						   <div class="form-group">
							   <label for="discription"class="form-label"><h6 style="margin-top:30px;">Discription</h6></label>
							   <input type="text" class="form-control px-3" placeholder="Enter your Discription" id="discription" style="border: 2px solid;" value="<?php echo $row != null ? $row['Discription'] : ''; ?>">
						   </div>
					   </div>
					   <div class="col-md-12">
						   <div class="form-group">
							   <label for="aboutus" class="form-label"><h6 style="margin-top:30px;">About us</h6></label>
							   <input type="text" class="form-control px-3" placeholder="Enter your aboutus" id="aboutus" style="border: 2px solid;" value="<?php echo $row != null ? $row['Aboutus'] : ''; ?>">
						   </div>
					   </div>
				</div>			
		  </div>		  
		  
		          <div class="col-md-12">
				        <?php
						  if($Id != null){						
						 
						?>				   
				       <button id="update" class="btn btn-primary">Update</button>
					     <?php
						 } else{				 						 
						  ?>
					      <button id="submit" class="btn btn-info">Submit</button>
						  <?php
						 }
						  ?>
				   </div>	
				   
				   
		</div>
	  			  
    </div>
	
 
 
	<?php include 'include/footer.php';?>
		
	<?php include 'include/foot.php';?>
 
 
    <script>
	     $(document).ready(function(){
			 
			 $('#example-getting-started').multiselect();
			 
			   $("#listimage").change(function(){
				   var filename = $("#filename").val();
				   
				   var file =  $(this)[0].files[0];
				   
				   var formdata = new FormData();
				   formdata.append('imagefile', file);
				   formdata.append('filename', filename);
				 
					console.log(filename);
				 
				   $.ajax({
					   type : "POST",
					   url : "service/uploadfile.php",
					   data : formdata,
					   processData :  false,
					   contentType : false,
					   success : function(resp)
		               {
						   if(resp != ""){
							   var path = 'image/list_image/'+resp;
							   
							   $('#filename').val(resp);
							   
							   $('#showimg').html('<img src="'+path+'?v4" width="100px" height="100px" />');
							   
						   }
						   
						   
					   }
					   
				   })
				   
				   
				   
			   })
			   
			  
			 
			 
			 $("#detailsimage").change(function(){
				   var fileimage = $("#fileimage").val();
				   
				   var file =  $(this)[0].files[0];
				   
				   var formdata = new FormData();
				   formdata.append('photofile', file);
				   formdata.append('fileimage', fileimage);
				   
				   $.ajax({
					   type : "POST",
					   url : "service/uploadphoto.php",
					   data : formdata,
					   processData :  false,
					   contentType : false,
					   success : function(resp)
		               {
						   if(resp != ""){
							   var path = 'image/detail_image/'+resp;
							   
							   $('#fileimage').val(resp);
							   
							   $('#show').html('<img src="'+path+'?v3" width="100px" height="100px" />');
							   
						   }
						   
						   
					   }
					   
				   })
				   
				   
				   
			   })
			 
			 
			 
			 
			 
			 
			 
			  $("#submit").click(function(){
				  //console.log("asdvasd");
				
				  var categoryid = $("#categoryid").val();
				  	//console.log(categoryid);
				  var eventsname = $("#eventsname").val();
				  var eventsdate = $("#eventsdate").val();
				  var eventsprice = $("#eventsprice").val();
				  var listimage = $("#filename").val();
				  var detailsimage = $("#fileimage").val();
				  var discription = $("#discription").val();
				  var aboutus = $("#aboutus").val();
				  var artist =  $('#example-getting-started').val();
				
				
				
				  var obj = {
					  f_categoryid : categoryid,
					  f_eventsname : eventsname,
					  f_eventsdate : eventsdate,
					  f_eventsprice : eventsprice,
					  f_listimage : listimage,
					  f_detailsimage : detailsimage,
					  f_discription : discription,
					  f_aboutus : aboutus,
					  f_artist : artist,
					  f_action : "insert"
				  }
				
				console.log(obj);
					$.ajax({
						 type : "POST",
						 url : "service/project.php",
						 data : obj,
						 success: function(resp){
							if(resp == 'success'){
								$("#message").html("form submit successfully");
							}
							else{
								$("#message").html("form is not submit");
							}
						}
						
						 
					})
				
				
			  });
			 
			 
			 $("#update").click(function(){
				  var categoryid = $("#categoryid").val();				 
				  var eventsname = $("#eventsname").val();
				  var eventsdate = $("#eventsdate").val();
				  var eventsprice = $("#eventsprice").val();
				  var listimage = $("#filename").val();
				  var detailsimage = $("#fileimage").val();
				  var discription = $("#discription").val();
				  var aboutus = $("#aboutus").val();
				  var id = '<?php echo $Id ?>';
				  
				 
				  var obj = {
					  f_categoryid : categoryid,
					  f_eventsname : eventsname,
					  f_eventsdate : eventsdate,
					  f_eventsprice : eventsprice,
					  f_listimage : listimage,
					  f_detailsimage : detailsimage,
					  f_discription : discription,
					  f_aboutus : aboutus,
					  f_action : "update",
					  f_id : id
				  }
				
				
				  $.ajax({
						 type : "POST",
						 url : "service/project.php",
						 data : obj,
						 success: function(resp){
							if(resp == 'success'){
								$("#message").html("form submit successfully");
							}
							else{
								$("#message").html("form is not submit");
							}
						}
						
						 
					})
				 
			 });
			 
			 
		 });
    </script>
 
  </body>
</html>
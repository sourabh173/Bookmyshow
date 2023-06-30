<?php
    include  'config/conn.php';
	
$Id = null;
$row = null;


if(isset($_GET['key'])){
	
	  $Id = $_GET['key'];
	  $getdate = 'select * from artist where Id="'.$Id.'"';
	  $qry = mysqli_query($conn, $getdate);
	  $row = mysqli_fetch_assoc($qry);
	  
	  
}
	

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
      
   </style>
 <?php include 'include/head.php';?>
 
 
 
 
</head>

<body class="g-sidenav-show  bg-gray-200" style="background:red; importanat">
  
 
  <?php include 'include/aside1.php';?>
  
  <?php include 'include/center.php';?>
 
 
    
		<div class="container-fluid py-0" style=" padding-left:200px;"> 
		<div class="card" style="width:900px; margin:auto;">
		  <div class="card-header"><h3>Artist Table</h3></div>
		  <div class="card-body">
				<div class="row">
					   <div class="col-md-6">
						   <div class="form-group">
								<label for="artistname" class="form-label"><h6>Artist Name</h6></label>
								<input type="text" class="form-control px-3" placeholder="Enter your Id" id="artistname" style="border: 2px solid;" value="<?php echo $row != null ? $row['ArtistName'] : ''; ?>">
						   </div>				   
					   </div>
						<div class="col-md-6">
						
							<?php
								if($row){
							?>
							  <div id="showimg" ><img src="<?php echo 'image/artist_image/'.$row['ArtistImage']; ?>" width="100px" height="100px" /></div>
							<?php
								} else {
							?>
								<div id="showimg"></div>
							<?php
								}
							?>
						
						   <div class="form-group">
								<label for="artistimage" class="form-label"><h6>Artist Image</h6></label>
								<input type="file" class="form-control px-3" placeholder="Enter your artistimage" id="artistimage" style="border: 2px solid;">
								<input type="hidden" class="form-control-file" id="fileartist" value="<?php echo $row != null ? $row['ArtistImage'] : ''; ?>">
						   </div>				   
					   </div>					  					  
					   <div class="col-md-6">
						   <div class="form-group">
							   <label for="occupation" class="form-label"><h6 style="margin-top:30px;">Occupation</h6></label>
							   <input type="text" class="form-control px-3" placeholder="Enter your occupation" id="occupation" style="border: 2px solid;" value="<?php echo $row != null ? $row['Occupation'] : ''; ?>">
						   </div>
					   </div>
					    <div class="col-md-6">
						   <div class="form-group">
							   <label for="Aboutartist" class="form-label"><h6 style="margin-top:30px;">About Artist</h6></label>
							   <input type="text" class="form-control px-3" placeholder="Enter your Aboutartist" id="aboutartist" style="border: 2px solid;" value="<?php echo $row != null ? $row['Aboutartist'] : ''; ?>">
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
			
			   $("#artistimage").change(function(){
				  var fileartist = $("#fileartist").val(); 
				   
				   var file =  $(this)[0].files[0];
				   
				   var formdata = new FormData();
				   formdata.append('artistfile', file);
				   formdata.append('fileartist', fileartist);
				 
					console.log(fileartist);
				 
				   $.ajax({
					   type : "POST",
					   url : "service/uploadartist.php",
					   data : formdata,
					   processData :  false,
					   contentType : false,
					   success : function(resp)
		               {
						   if(resp != ""){
							   var path = 'image/artist_image/'+resp;
							   
							   $('#fileartist').val(resp);
							   
							   $('#showimg').html('<img src="'+path+'?v4" width="100px" height="100px" />');
							   
						   }
						   
						   
					   }
					   
				   })
				   
				   
				   
			   });
			
			
			
			
			
			$("#submit").click(function(){
				
				var artistname = $("#artistname").val();
				var fileartist = $("#fileartist").val();
				var occupation = $("#occupation").val();
				var aboutartist = $("#aboutartist").val();
				
				
				var obj = {
					f_artistname : artistname,
					fileartist : fileartist,
					f_occupation : occupation,
					f_aboutartist : aboutartist,
					f_action : "insert",
				}
				
				
				$.ajax({
					type : "POST",
					url : "service/art.php",
					data : obj,
					success : function(resp){
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
				
				var artistname = $("#artistname").val();
				var fileartist = $("#fileartist").val();
				var occupation = $("#occupation").val();
				var aboutartist = $("#aboutartist").val();
				var id = '<?php echo $Id ?>';
				
				
				var obj = {
					f_artistname : artistname,
					fileartist : fileartist,
					f_occupation : occupation,
					f_aboutartist : aboutartist,
					f_action : "update",
					f_id : id
				}
				
				
				$.ajax({
					type : "POST",
					url : "service/art.php",
					data : obj,
					success : function(resp){
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
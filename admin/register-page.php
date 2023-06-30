<?php
    include 'config/conn.php';
	
$Id = null;	
$row = null;	

if(isset($_GET['key'])){
     
		$Id = $_GET['key'];
		$getdata = 'select * from lis where Id="'.$Id.'"';
		$qry = mysqli_query($conn, $getdata); 
		$row = mysqli_fetch_assoc($qry);
		
		//print_r($qry);
	
}

//print_r($row);


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
 
 <?php include 'include/head.php';?>
 
 
 
 
</head>

<body class="g-sidenav-show  bg-gray-200">
  
  <?php include 'include/aside1.php';?>
  
  
  <?php include 'include/center.php';?>
 
 
       <div style="text-align:center; padding-left:900px;">
	      <a href="category.php"><button class="btn btn-info">Category-Page</button></a>
       </div>
 
 
	<div class="container-fluid py-4">
		<div class="card" style="width:600px; margin:auto;">
		  <div class="card-header">Add Category</div>  
		  <div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<div class="mb-3">
							<label for="categoryname" class="form-label"><h5>CategoryName</h5></label>
							<input type="text" class="form-control bg-light" id="categoryname" placeholder="Enter Your Category Name" name="categoryname" value="<?php echo $row != null ? $row['CategoryName'] : ''; ?>">
						</div>								  
					</div>									  
					<div class="col-md-12">					   
						<div class="mb-3">            
							<?php 
								if($row){
							?>
								<div id="showimg"><img src="<?php echo 'image/category/'.$row['CategoryFile']; ?>" width="100px" height="100px" /></div>
							<?php
								} else {
							?>
								<div id="showimg"></div>
							<?php
								}
							?>
						
						  
							<label for="categoryfile" class="form-label"><h5>CategoryFile</h5></label>
							<input type="file" class="form-control bg-light" id="categoryfile" placeholder="Enter Category Name" name="categoryfile" value="<?php echo $row != null ? $row['CategoryFile'] : ''; ?>">
							<input type="hidden" class="form-control-file" id="filename" value="<?php echo $row != null ? $row['CategoryFile'] : ''; ?>">
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
				$("#categoryfile").change(function(){ 
					var filename = $("#filename").val();
					
					console.log($(this));
					
					var file = $(this)[0].files[0];
					
					var formdata = new FormData();
					formdata.append('imagefile', file);
					formdata.append('filename', filename);
					
												
					
					$.ajax({
						type : "POST",
						url : "service/uploadimage.php",
						data : formdata,
						processData: false,
						contentType: false,
						success: function(resp)
						{
						    if(resp != ""){
								var path = 'image/category/'+resp;
								
								$('#filename').val(resp);
								
								$('#showimg').html('<img src="'+path+'?v4" width="100px" height="100px" />');
							}
						
						}
					})
					
				})
				
				
				
				
				
				
				$("#submit").click(function(){ 
					var categoryname = $("#categoryname").val();					
					var categoryfile = $("#filename").val();
				
					
					var obj = {
						categoryname : categoryname,
						categoryfile : categoryfile,
						action : "insert"						
					}
					
					
					$.ajax({
						type : "POST",
						url : "service/lis.php",
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
					
				})
				
				$("#update").click(function(){
					  var categoryname = $("#categoryname").val();					
					  var categoryfile = $("#filename").val();			  					 
					  var id = '<?php echo $Id ?>';			          
					  
					  
					  var obj ={
						 categoryname : categoryname,
						 categoryfile : categoryfile,					
						 action : "update",
						 id : id
						  
					  }
					  
					  $.ajax({
						  type : "POST",
						  url : "service/lis.php",
						  data : obj,
						  success : function(resp){
							  if(resp == 'success'){
								  $("#message").html("form submit succesfuli")
							  }
							   if(resp == 'error'){
								   $("#message").html("Please cheeck error")
							  }
							  
						  }
						  
					    })
					  
					   
				   });
				
				
				
			});
		 

	 </script>
 
 
</body>

</html>



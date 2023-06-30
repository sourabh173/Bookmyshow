<?php
   include 'config/conn.php';
   
   $getdata = 'select * from lis';
   $qry = mysqli_query($conn, $getdata);



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
     .box-design{padding:20px; margin:10px 10px; border-radius:20px; box-shadow: 4px 3px 7px 4px black;}
		
		.container{width:100%; max-width:1200px; }
  </style>
  
 
 <?php include 'include/head.php';?>
 
 
 
 
</head>

<body class="g-sidenav-show  bg-gray-200">
  
  <?php include 'include/aside1.php';?>
  
  
  <?php include 'include/center.php';?>
 
 
		<div style="text-align:center; padding-left:900px;">
	      <a href="register-page.php"><button class="btn btn-success">Register_page</button></a>
       </div>	   
 
	
	<section class="section">
		    <div class="container">
			    <div class="row" style="padding-left:180px;">
				    <table class="table" style="background:#b1f0e2; color:black;">
					     <tr>
						     <th>S.NO</th>
						     <th>CategoryName</th>
						     <th>CategoryFile</th>						     
						     <th>Status</th>
						     <th>CreatedDate</th>
						     <th>EDIT</th>
					     </tr>
						 
						 <?php
						      $count = 1;
							  
							  while($row = mysqli_fetch_assoc($qry)){
						  
						 ?>
						 
						 
						 <tr>
						    <td><?php echo $count; ?></td>
						    <td><?php echo $row['CategoryName']; ?></td>
						    <td><img src="<?php echo 'image/category/'.$row['CategoryFile'] ?>" width="100px" height="100px"/></td>						    
						    <td><?php echo $row['Status']; ?></td>
						    <td><?php echo $row['CreatedDate']; ?></td>
							<td><a href="register-page.php?key=<?php echo $row['Id']; ?>"><h6>EDIT</h6></a></td>
						 </tr>
						 
						 <?php
							  $count ++;
							  }
						 ?>
						 
				    </table>
			    </div>
		    </div>
		</section>
	
	
 
	<?php include 'include/footer.php';?>
 
	<?php include 'include/foot.php';?>
	
	
	   <script>
		    $(document).ready(function(){
				$('#submit').click(function(){ 
					var categoryname = $("#categoryname").val();					
					var categoryfile = $("#categoryfile").val();
					
					var obj = {
						f_categoryname : categoryname,
						f_categoryfile : categoryfile						
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
				
				
				
			});
		 

	 </script>
 
 
</body>

</html>
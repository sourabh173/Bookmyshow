<?php
  include 'config/conn.php';
  
$Id = null;  
$row = null; 

if(isset($_GET['key'])){
	
	$Id = $_GET['key'];
	$getdata = 'select * from page where Id="'.$Id.'"';
	$qry = mysqli_query($conn, $getdata);
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
		  <div class="card-header"><h3>USER__FORM</h3></div>
		  <div class="card-body">
				<div class="row">
					  <div class="col-md-6"> 
					      <div class="form-group">
						      <label for="name"><h5>Name</h5></label>
							  <input type="text" class="form-control px-4" placeholder="enter your name" id="name" style="border:1px solid;" value="<?php echo $row !=null ? $row['Name'] : ''; ?>">
					      </div>
					  </div> 
					  <div class="col-md-6"> 
					      <div class="form-group">
						      <label for="phone"><h5>Phone</h5></label>
							  <input type="text" class="form-control px-4" placeholder="enter your phone" id="phone" style="border:1px solid;" value="<?php echo $row !=null ? $row['Phone'] : ''; ?>">
					      </div>
					  </div> 
					   <div class="col-md-6"> 
					      <div class="form-group">
						      <label for="gmail"><h5>Gmail</h5></label>
							  <input type="text" class="form-control px-4" placeholder="enter your gmail" id="gmail" style="border:1px solid;" value="<?php echo $row !=null ? $row['Gmail'] : ''; ?>">
					      </div>
					  </div>
					  <div class="col-md-6"> 
					      <div class="form-group">
						      <label for="password"><h5>Password</h5></label>
							  <input type="text" class="form-control px-4" placeholder="enter your password" id="password" style="border:1px solid;" value="<?php echo $row !=null ? $row['Password'] : ''; ?>">
					      </div>
					  </div>
					   <div class="col-md-12"> 
					      <div class="form-group">
						      <label for="city"><h5>City</h5></label>
							  <input type="text" class="form-control px-4" placeholder="enter your city" id="city" style="border:1px solid;" value="<?php echo $row !=null ? $row['City'] : ''; ?>">
					      </div>
					  </div>
					   <div class="col-md-12"> 
					      <div class="form-group">
						      <label for="state"><h5>State</h5></label>
							  <input type="text" class="form-control px-4" placeholder="enter your state" id="state" style="border:1px solid;" value="<?php echo $row !=null ? $row['State'] : ''; ?>">
					      </div>
					  </div>
					   <div class="col-md-12"> 
					      <div class="form-group">
						      <label for="pincode"><h5>Pincode</h5></label>
							  <input type="text" class="form-control px-4" placeholder="enter your pincode" id="pincode" style="border:1px solid;" value="<?php echo $row !=null ? $row['Pincode'] : ''; ?>">
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
			 $("#submit").click(function(){
				 var name = $("#name").val();
				 var phone = $("#phone").val();
				 var gmail = $("#gmail").val();
				 var password = $("#password").val();
				 var city = $("#city").val();
				 var state = $("#state").val();
				 var pincode = $("#pincode").val();
				 
				 
				 var obj = {
					 f_name : name,
					 f_phone : phone,
					 f_gmail : gmail,
					 f_password : password,
					 f_city : city,
					 f_state : state,
					 f_pincode : pincode,
					 f_action : "insert"
					 
				 }
				 
				 console.log(obj);
				 
				 $.ajax({
					 type : "POST",
					 url : "service/page.php",
					 data : obj,
					 success : function(resp)
					 {
						if(resp == 'success'){
							$("#message").html("form submit successfully");
						}else{
							$("#message").html("form is not submit");
						}
					}
					 
					 
				 })
				 
			 });
			 
			 
			 $("#update").click(function(){
				 var name = $("#name").val();
				 var phone = $("#phone").val();
				 var gmail = $("#gmail").val();
				 var password = $("#password").val();
				 var city = $("#city").val();
				 var state = $("#state").val();
				 var pincode = $("#pincode").val();
				 var id = '<?php echo $Id ?>';
				 
				 
				 var obj = {
					 f_name : name,
					 f_phone : phone,
					 f_gmail : gmail,
					 f_password : password,
					 f_city : city,
					 f_state : state,
					 f_pincode : pincode,
					 f_action : "update",
					 f_id : id
					 
				 }
				 
				 console.log(obj);
				 
				 $.ajax({
					 type : "POST",
					 url : "service/page.php",
					 data : obj,
					 success : function(resp)
					 {
						if(resp == 'success'){
							$("#message").html("form submit successfully");
						}else{
							$("#message").html("form is not submit");
						}
					}
					 
					 
				 })
				 
			 });
			 
			 
			 
			 
			 
		 });
    </script>
 
  </body>
</html>
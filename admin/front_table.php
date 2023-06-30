<?php
     
   include 'config/conn.php';
   
   $getdata = 'select * front page';
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
      .table tr{border:3px solid;}
   </style>
 <?php include 'include/head.php';?>
 
 
 
 
</head>

<body class="g-sidenav-show  bg-gray-200" style="background:red; importanat">
  
 
  <?php include 'include/aside1.php';?>
  
  <?php include 'include/center.php';?>
 
   
		 
	      <section class="section1" style="padding:20px;">
		     <div class="container">
			     <div class="row" style="padding-left:200px;">
				    <table style="background:#f5b6b6; color:black; border:1px solid;">
					    <tr style="border:2px solid;">
						   <th style="padding:10px;">S.NO</th>
						   <th>Name</th>
						   <th>Phone</th>
						   <th>Gmail</th>
						   <th>City</th>
						   <th>State</th>
						   <th>Pincode</th>
						   <th>Status</th>
						   <th>CreatedDate</th>
						   <th>Update</th>
					    </tr>
						
						<?php
						   $count = 1;
						   
						   while($row = mysqli_fetch_assoc($qry)){
						
						?>
						
						
						<tr style="border:2px solid;">
						   <td style="padding:10px;"><?php echo $count; ?></td>
						   <td><?php echo $row['Name']; ?></td>
						   <td><?php echo $row['Phone']; ?>
						   <td><?php echo $row['Gmail']; ?></td>						
						   <td><?php echo $row['City']; ?></td>
						   <td><?php echo $row['State']; ?></td>
						   <td><?php echo $row['Pincode']; ?></td>
						   <td><?php echo $row['Status']; ?></td>
						   <td><?php echo $row['CreatedDate']; ?></td>
						   <td><a href="front_user.php?key=<?php echo $row['Id']; ?>"><h6>Update</h6></a></td>
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
			 $("#btn").click(function(){
				$(".section1").hide();
			 });
			 $("#but").click(function(){
				$(".section1").show();
			 });
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
					 f_pincode : pincode
				 }
				 
				 console.log(obj);
				 
				 $.ajax({
					 type : "POST",
					 url : "service/front.php",
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
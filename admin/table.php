<?php
    include 'config/conn.php';
	
	$getdata = 'select * from project';
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
 
 
    
		<section class="section">
		    <div class="container">
			    <div class="row" style="padding-left:180px;">
				    <table class="table" style="background:#b1f0e2; color:black;">
					     <tr>
						     <th>S.NO</th>
						     <th>Category Id</th>
						     <th>Events Name</th>
						     <th>Events Date</th>
						     <th>Events Price</th>
						     <th>List Image</th>
						     <th>Details Image</th>
						     <th>Discription</th>
						     <th>About us</th>
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
						    <td><?php echo $row['CategoryId']; ?></td>
						    <td><?php echo $row['EventsName']; ?></td>
						    <td><?php echo $row['EventsDate']; ?></td>
						    <td><?php echo $row['EventsPrice']; ?></td>
						    <td><img src="<?php echo 'image/list_image/'.$row['ListImage']; ?>" width="100px" height="100px"/></td>
						    <td><img src="<?php echo 'image/detail_image/'.$row['DetailsImage']; ?>" width="100px" height="100px"/></td>
						    <td><?php echo $row['Discription']; ?></td>
						    <td><?php echo $row['Aboutus']; ?></td>
						    <td><?php echo $row['Status']; ?></td>
						    <td><?php echo $row['CreatedDate']; ?></td>
							<td><a href="event.php?key=<?php echo $row['Id']; ?>"><h6>EDIT</h6></a></td>
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
	     
    </script>
 
  </body>
</html>
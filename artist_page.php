<?php
    include 'admin/config/conn.php';
	
	$id = $_GET['artist'];
	$getdataartist = 'select * from artist where Id = "'.$id.'" ';
	$querylast = mysqli_query($conn, $getdataartist);
	

?>

<html>
   <head>
       <?php  include "include/header_link.php";?>
	   <?php  include "include/head.php";?>
   </head>
   
      <body>
	     
		 <section style="background:#000000d1; height:400px;">
		    <div class="container">
			     <div style="background:#2e2e2e;">		  
					 <?php
						  include "admin/config/conn.php";
						  $querylast = "select * from artist where Id = '".$id."'";
						  $sqllast = mysqli_query($conn, $querylast);
					 
					 ?>							   
					 <?php
						 while($datalast = mysqli_fetch_assoc($sqllast)){
						 
					 ?>
							 <div class="row">
							  <div class="col-md-3">
								<img src="<?php echo 'admin/image/artist_image/'.$datalast['ArtistImage'] ?>" style="border-radius:100px; margin-top:90px;"/>
						      </div>
							   <div class="col-md-9" style="margin-top:150px;">	
								<h1 style="color:white;"><?php echo $datalast['ArtistName']?></h1>
								<p><?php echo $datalast['Occupation']?></p>
								<h5 style="color:white;"><?php echo $datalast['Aboutartist']?></h5>
							   </div>
							</div> 
							
						 <?php
							}
						 ?>
				    </div>
	           </div>
		    </div>
		 </section>
		 
		 
		 
		<?php include 'include/foot.php'; ?>
	    <?php include 'include/footer_script.php'; ?>

      </body>
<html>
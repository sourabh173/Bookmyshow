<?php
    include 'admin/config/conn.php';


	
	 $id = $_GET['detail'];
	 $getdatadetail = 'select * from project where Id = "'.$id.'"';
	 $qrydetail = mysqli_query($conn, $getdatadetail);
	 $fatch = mysqli_fetch_assoc($qrydetail);
	
	//print_r($qrydetail);
	
	$sqlartist = "select * from artist where Id IN (".$fatch['Artistid'].")";
	//print_r($sqlartist);
	$run = mysqli_query($conn, $sqlartist);
	
?>
<html>
     <head>
	    <?php  include "include/header_link.php";?>
	    <?php  include "include/head.php";?>
		<style>
		  .frist{display:flex; flex-wrap:wrap; padding:20px;}
		  .last{width:50%;}
		  .but{padding:18px 60px; border:0; border-radius:2px; background:#e05959f2; color:white;}
		  
		</style>
     </head>
	 
   <body style="background:#eee;">
   
     
	 
	   <section class="detailpage">
		<div class="container" style="background:white;">
	     <div>		  
		     <?php
			      include "admin/config/conn.php";
				  $queryandaa = "select * from project where Id = '".$id."'";
				  $sqlandaa = mysqli_query($conn, $queryandaa);
			 
			 ?>		  
			 <?php
			     while($dataandaa = mysqli_fetch_assoc($sqlandaa)){
				 
			 ?>
				     <div>
						<img src="<?php echo 'admin/image/detail_image/'.$dataandaa['DetailsImage'] ?>" style="width:100%;"/>
				   <div class="row container" style="padding:20px;">
					    <h4 class="col-md-10"><?php echo $dataandaa['EventsName'] ?></h4>
						<a href="booking.php"><div class="container col-md-2" style="test-align:right;"><button class="but">BOOK</button></div></a>
						<p class="col-md-6"><?php echo $dataandaa['Discription']?></p>
					    <p class="col-md-6"><?php echo $dataandaa['Aboutus']?></p>
					    <h5 class="col-md-6">RS->  <?php echo $dataandaa['EventsPrice']?></h5>						
					</div> 
					 </div>
					 <?php
				 }
					 ?>
					 
   				
				 <div class="row">
					<div class="col-md-6">
					<?php
					if($sqlartist)
					?>
						<div class="bgartist bg-light">
						   <h5>Artist</h5>
						    <div class="artistimage"></div>
							<div class="row">
							  <?php
 							      include "admin/config/conn.php";
								  $querylast = "select * from artist where Id = '".$id."'";
								  $run = mysqli_query($conn, $querylast);
							  ?>
							
							  <?php
							     while($artistdata = mysqli_fetch_assoc($run)){
							  ?>
							  
							  <div class="col-md-6">
							      <div class="artist_image">
								       <a href="artist_page.php?artist=<?php echo $artistdata['Id']; ?>">
									   <img src="<?php echo 'admin/image/artist_image/'.$artistdata ['ArtistImage'] ?>" style="border-radius:2px; margin:10px 10px; width:150px; height:150px;"/></a>
							      </div>
							  </div>
							 <div class="col-md-6">
								<div class="artistname">
									<p><?php echo $artistdata['ArtistName']?></p>
								</div>
							 </div> 
							  <?php
								 }
								 ?>
							</div>
					
						</div>
					</div>
				 
				 </div>
				  
	     </div>
	    </div>
	  </section>
			 
		
		<?php include 'include/foot.php'; ?>
	    <?php include 'include/footer_script.php'; ?>

   </body>
</html>
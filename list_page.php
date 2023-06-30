<?php
    include 'admin/config/conn.php';

	$query = '';

	if(isset($_GET['min']) & isset($_GET['max'])){
		$min = $_GET['min'];
		$max = $_GET['max'];
		$query = "And EventsPrice >= ".$min." And EventsPrice <= ".$max."";
		
	}
	 
	 $Id = $_GET['category'];
	 $getdata = "select * from project where CategoryId = ".$Id." ".$query."";
	// print_r($getdata);
	 $qry = mysqli_query($conn, $getdata);
	
	//print_r($qry);

	$getdatacat = 'select * from lis where Id = "'.$Id.'"';
	$qrycat = mysqli_query($conn, $getdatacat);
	$datacat = mysqli_fetch_assoc($qrycat);
	//print_r($datacat);
	
	 $query = "select * from lis where Id BETWEEN  1 and 12";
	 $menu = mysqli_query($conn, $query);

?>
<html>
     <head>
	    <?php  include "include/header_link.php";?>
	    <?php  include "include/head.php";?>
		
		<style>
			details > summary {
			  padding: 4px;
			  width: 200px;
			  background-color: #eeeeee;
			  border: none;
			  box-shadow: 1px 1px 2px #bbbbbb;
			  cursor: pointer;
			}

			details > p {
			  background-color: #eeeeee;
			  padding: 4px;
			  margin: 0;
			  box-shadow: 1px 1px 2px #bbbbbb;
			}
			
			.line{
				text-dectroation:none;
			}
		</style>
		
		
     </head>
	 
   <body style="background:#f5f5f5;">
   
   <section class="headsection">
	     <div>		  
		     <?php
			      include "admin/config/conn.php";
				  $queryl = "select * from lis Order By id DESC LIMIT 0,3";
				  $sqll = mysqli_query($conn, $queryl);
			 
			 ?>		  
		     <div class="owl-carousel owl-theme" id="slider">
			 <?php
			     while($datal = mysqli_fetch_assoc($sqll)){
				 
			 ?>
			     <div class="item">
				     <div style="margin-bottom:30px;">
						<img src="<?php echo 'admin/image/Category/'.$datal['CategoryFile'] ?>" style="width:100%;"/>
					 </div>
			     </div>	
   				 <?php
				    }
				 ?>
		     </div>
	     </div>
	  </section>
	  
   
         
	  
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-3">
					<details>
						  <summary class="summary">Date</summary>
						 <button style="margin:5px 5px;" type="button" class="btn-outline-danger">Today</button>
						  <button style="margin:5px 5px;" type="button" class="btn-outline-danger">Tommorow</button><br>
						  <button style="margin:5px 5px;" type="button" class="btn-outline-danger">Wekend</button>
					</details>
					<details class="mt-3">
						  <summary class="summary">Language</summary>
						 <button style="margin:5px 5px;" type="button" class="btn-outline-danger">Hindi</button>
						  <button style="margin:5px 5px;" type="button" class="btn-outline-danger">English</button>
						  <button style="margin:5px 5px;" type="button" class="btn-outline-danger">urdu</button><br>
						  <button style="margin:5px 5px;" type="button" class="btn-outline-danger">Hindushtani</button>
					</details>
					<details class="mt-3">
						<summary class="summary">Category</summary>
						 <div>
							<div class="categories">
								   <?php
									 include "admin/config/conn.php";
									 $query = "select * from lis";
									 $menu = mysqli_query($conn, $query);
								   ?>
									 <?php
										 while($data = mysqli_fetch_assoc($menu)){			
									 ?>
									<li><a href="list_page.php?category=<?php echo $data['Id'];?>"><?php echo $data['CategoryName'];?></a></li>
									 <?php
										 }
									 ?>
								</div>
						 </div>
					</details>
					<details class="mt-3">
						  <summary class="summary">Genres</summary>
						  <button style="margin:5px 5px;" type="button" class="btn-outline-danger">Drama</button>
						  <button style="margin:5px 5px;" type="button" class="btn-outline-danger">Comedy</button>
						  <button style="margin:5px 5px;" type="button" class="btn-outline-danger">Adeption</button><br>
						  <button style="margin:5px 5px;" type="button" class="btn-outline-danger">Classic</button>
						  <button style="margin:5px 5px;" type="button" class="btn-outline-danger">Musical</button><br>
						  <button style="margin:5px 5px;" type="button" class="btn-outline-danger">Maythlogical</button>
						  <button style="margin:5px 5px;" type="button" class="btn-outline-danger">Fantacey</button><br>
						  <button style="margin:5px 5px;" type="button" class="btn-outline-danger">Romantic</button>
					</details>
					<details class="mt-3">
						  <summary  class="summary">More Filter</summary>						 
						  <button style="margin:5px 5px;" type="button" class="btn-outline-danger">Outdoor Events</button>
						  <button style="margin:5px 5px;" type="button" class="btn-outline-danger">Fast Filling</button><br>
						  <button style="margin:5px 5px;" type="button" class="btn-outline-danger">Kids Allowed</button>
					</details>
					<details class="mt-3">
						  <summary class="summary">Price</summary>
						 <button style="margin:5px 5px;" type="button" class="btn-outline-danger">Free</button>
						  <a href="list_page.php?category=<?php echo $datacat['Id'];?>&min=0&max=500"><button style="margin:5px 5px;" type="button" class="btn-outline-danger">0-500</button></a>
						  <a href="list_page.php?category=<?php echo $datacat['Id'];?>&min=501&max=1500"><button style="margin:5px 5px;" type="button" class="btn-outline-danger">501-1500</button><br></a>
						  <a href="list_page.php?category=<?php echo $datacat['Id'];?>&min=1500&max=2500"><button style="margin:5px 5px;" type="button" class="btn-outline-danger">1500-2500</button></a>
						  <a href="list_page.php?category=<?php echo $datacat['Id'];?>&min=0&max=2500"><button style="margin:5px 5px;" type="button" class="btn-outline-danger">Above 2500</button></a>
					</details>
					<button style="margin:10px 10px;" type="button" class="col-md-12 btn-outline-danger">Brower by vienu</button>
					</div>
					<div class="col-md-9">
							<div>
								<div class="categorymenu">
								   <?php
									 include "admin/config/conn.php";
									 $query = "select * from lis where Id BETWEEN  1 and 9";
									 $menu = mysqli_query($conn, $query);
								   ?>
									 <?php
										 while($data = mysqli_fetch_assoc($menu)){			
									 ?>
									<li><a href="list_page.php?category=<?php echo $data['Id'];?>"><?php echo $data['CategoryName'];?></a></li>
									 <?php
										 }
									 ?>
								</div>
							</div>	
							
						<div class="row mt-4" class="line">
							
							<?php
								while($row = mysqli_fetch_assoc($qry)){
							?>
							<div class="col-md-3">	
								<a href="detail_page.php?detail=<?php echo $row['Id']?>">
								<div>
									 <img src="<?php echo 'admin/image/list_image/'.$row['ListImage']; ?>" width="100%"/>
									 <h5 class="text-dark"><?php echo $row['EventsName']?></h5>
									 <p><?php echo $datacat['CategoryName']?></p>
									 <p>Rupes=><?php echo $row['EventsPrice']?></p>
								</div>
								</a>
							</div>
							<?php
								}
							?>
						</div>  
					</div>   
				</div>
			</div>
		</section>
		
		
		<?php include 'include/foot.php'; ?>
	    <?php include 'include/footer_script.php'; ?>
	  
		<script>
			 $('#slider').owlCarousel({
				stagePadding: 100,
				loop:true,
				autoplay:true,
				autoplayTimeout:2000,
				margin:10,
				nav:true,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:1
					},
					1000:{
						items:1
					}
				}
			})
		</script>
   </body>
</html>
<html>
   <head>
		<?php  include "include/header_link.php";?>
		
   </head>
     
	 
   <body>
     <?php  include "include/head.php";?>
	  
	 
	  <section class="headsection">
	     <div>		  
		     <?php
			      include "admin/config/conn.php";
				  $query1 = "select * from lis Order By id DESC LIMIT 0,4";
				  $sql = mysqli_query($conn, $query1);
			 
			 ?>		  
		     <div class="owl-carousel owl-theme" id="mainslider">
			 <?php
			     while($data = mysqli_fetch_assoc($sql)){
				 
			 ?>
			     <div class="item">
				     <div style="margin:10px 10px;">
						<img src="<?php echo 'admin/image/Category/'.$data['CategoryFile'] ?>" style="width:100%;"/>
					 </div>
			     </div>	
   				 <?php
				    }
				 ?>
		     </div>
	     </div>
	  </section>
	  
	  
	  <section class="section11">
	     <div class="container">
		    <div><h2>Recomended Movies</h2></div>
				<?php
					include "admin/config/conn.php";
					$querya = "select * from project where CategoryId = 1";
					$sql = mysqli_query($conn,$querya);
			 			//print_r($sql);
						
					$queryaa = "select * from lis where Id = 1";
					$sqla = mysqli_query($conn,$queryaa);
					$row = mysqli_fetch_assoc($sqla)
				?>
		    <div class="owl-carousel owl-theme" id="categoryone">
				<?php 
					while($data = mysqli_fetch_assoc($sql)){		
				?>
					<div class="item">
						<a style="text-decoration:none;" href="detail_page.php?detail=<?php echo $data['Id'] ?>"><div>
							<img src="<?php echo 'admin/image/list_image/'.$data['ListImage'] ?>" style="border-radius:10px;"/>
							<h5 class="text-dark"><?php echo $data['EventsName'] ?></h5>
							<p><?php echo $row['CategoryName'] ?></p>
						</div></a>
					</div>	
				<?php
					} 	
				?>	
			</div>
	     </div>
	  </section>
	  
	  
	  <section class="section12">
	     <div class="container">
		     <div style="padding:40px;">
			    <img src="image/center.png" width="100%"/>
		     </div>
	     </div>
	  </section>
	  
	  
	  <section class="section13">
	     <div class="container">
		    <h2>The Best Of Live Events</h2>
		        <?php
				   include "admin/config/conn.php";
				   $queryb = "select * from project where id BETWEEN 11 and 19;";
				   $sql = mysqli_query($conn, $queryb);				
				?>
			 <div class="owl-carousel owl-theme" id="categorytwo">
			    <?php
				    while($data2 = mysqli_fetch_assoc($sql)){
				?>
				    <div class="item">
					     <div>
						      <img src="<?php echo 'admin/image/detail_image/'.$data2['DetailsImage'] ?>" style="border-radius:10px;"/>
					     </div>
				    </div>
				<?php
					}
				?>
			 
			 </div>
			 
			 
	     </div>
	  </section>
	  
	  <section style="background:#2e3245e8; color:white; padding:20px;">
	      <div class="container">
		     <div>
			    <img src="image/play.png" style="border-radius:50%;"/>
			   <h2>PREMIRES</h2>
		     </div>
		     <?php
			     include "admin/config/conn.php";
				 $queryc = "select * from project where CategoryId =3";
				 $sql = mysqli_query($conn, $queryc);
			 ?>
		        <div class="owl-carousel owl-theme" id="categorythree">
				   <?php
				        while($data3 = mysqli_fetch_assoc($sql)){
				   ?>
				      <div class="item">
					       <div>
						        <img src="<?php echo 'admin/image/list_image/'.$data3['ListImage']?>"/>
								<h5><?php echo $data3['EventsName']?></h5>
								<P style="color:white;">English</P>
					       </div>
				      </div>
				     <?php
					    }
					 ?>
		        </div>
	     </div>
	  </section>
	   
	   
	   
	  <section class="section16" style="padding:40px;">
	     <div class="container">
		   <div><h2>Laughter Therape</h2></div>
		       <?php
			       include "admin/config/conn.php";
				   $queryd = "select * from project where CategoryId = 4";
				   $sql = mysqli_query($conn, $queryd);
			   ?>
			      <div class="owl-carousel owl-theme" id="categoryfour">
				      <?php
					      while($data4 = mysqli_fetch_assoc($sql)){
					  ?>
					    <div class="item">
						    <div>
							     <a style="text-decoration:none;" href="detail_page.php?detail=<?php echo $data4['Id'] ?>">
							       <div><img src="<?php echo 'admin/image/list_image/'.$data4['ListImage']?>"/>
								 <h5 class="text-dark"><?php echo $data4['EventsName']?></h5>
								 <p style="color:black;">The Laugh store:Vegas mall Delhi</p>
								 </div></a>
						    </div>
					    </div>
					   <?php
						  }
					   ?>
			      </div>
			   
	     </div>
	  </section>
	  
	  <section class="section17" style="padding:30px;">
	     <div class="container">
		   <div><h2>Top Games And Sports Events</h2></div>		    			
		        <?php
			       include "admin/config/conn.php";
				   $querye = "select * from project where CategoryId = 5";
				   $sql = mysqli_query($conn, $querye);
			   ?>
			      <div class="owl-carousel owl-theme" id="five">
				      <?php
					      while($data5 = mysqli_fetch_assoc($sql)){
					  ?>
					    <div class="item">
						    <div>
							     <a style="text-decoration:none;" href="detail_page.php?detail=<?php echo $data5['Id'] ?>">
								 <div><img src="<?php echo 'admin/image/list_image/'.$data5['ListImage']?>"/>
								 <h5 class="text-dark"><?php echo $data5['EventsName']?></h5>	
								 <p>Sawai Mansingh stadium: Jaipur</p>
								 </div></a>
						    </div>
					    </div>
					   <?php
						  }
					   ?>
			      </div> 
		     
	     </div>
	  </section>
	  
	  
	  <?php include 'include/foot.php'; ?>
	  <?php include 'include/footer_script.php'; ?>
	  
	  <script>
	  
	       $('#mainslider').owlCarousel({
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
	  
	  
	  
		   $('#categoryone').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:5
				}
			}
		})
		
		
		
		   $('#categorytwo').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:5
				}
			}
		})
		
		
		$('#categorythree').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:5
				}
			}
		})
		
		
		$('#categoryfour').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:5
				}
			}
		})
		
		$('#five').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:5
				}
			}
		})
		
		
		
	  </script>
	  
   </body>
   
</html>



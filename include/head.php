<html> 
  <head>
       <?php  include "include/header_link.php";?>
  </head>
  
  <body>
 
  <section class="section1">
	     <div class="container">
		     <div class="div1">
			      <div class="sk1 img">
				     <a href="website.php"><img src="image/logo.png"/></a>
			      </div>
				  <div class="sk2 inp">
				      <input type="text" class="inp2" placeholder="search for movie event play sport kids activity" >
				  </div>
				  <div class="sk3 menu1">
				    <ul>
					  <li><a href="">Delhi-NCR</a></li>
				    </ul>
				  </div>
				  <div class="sk4">
				     <a href="sign_up.php"><button class="btn">Sign-up</button></a>
				  </div>
		     </div>
	     </div>
      </section>
	  
	  
	  <section style="padding:1px; background-color:black;">
	    <div class="container">
		<div class="menu2">
		   <?php
		     include "admin/config/conn.php";
			 $query = "select * from lis where Id BETWEEN  1 and 7";
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
	  </section>
	  
	  
	 
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
	  
		
		
		
	  </script>
	  
	  
	 </body>
</html>	  
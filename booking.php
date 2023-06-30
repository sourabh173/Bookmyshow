<html>
   <head>
        <?php  include "include/header_link.php";?>
		<style>
		   .hideclass{display:none;}
		   .trapezoid {
				border-bottom: 50px solid #6ace7fb3;
				border-left: 25px solid transparent;
				border-right: 25px solid transparent;
				height: 0;
				width: 275px;
			}
		</style>
   </head>
    
	 <body>
	     <?php  include "include/head.php";?>
		
		 
		 <section style="backgroung:yellow;">
		    <div class="container">
			      <div class="row">				      
					  <div class="col-12">
					    
						  <div class="row"  style="margin-top:100px; margin-bottom:50px;" >
						  
						     <?php
							 
							     $arrone = ['A', 'B', 'C', 'D', 'E', 'F'];
								 $arrtwo = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,];
								 
								   //print_r(count($arrtwo));
							 
							       for($i=0; $i<count($arrone); $i++){
							          for($j=0; $j < count($arrtwo); $j++){
										  
									   $itemone = $arrone[$i];
									   $itemtwo = $arrtwo[$j];
									   
									  // print_r($itemone.$itemtwo);
									   
							 ?>
						          <div class="col-md-1">
						            <div class="selectbtn"  style="margin:10px 10px;">
									     <input type="checkbox" value="<?php echo $itemone.$itemtwo ?>" class="hideclass" />
										 <button class="clickhandler"><?php echo $itemone.$itemtwo ?></button>
						            </div>
						           </div>
							  
		                              <?php
									  
									   } 
									  
									  }  
									?>					  
						  </div>
						  
						  <div style="padding-left:1050px;"><button class="btn-success" style="padding:20px 30px;">Book Ticket</button></div>
					  
					  </div>					
			      </div>
		    </div>
		 </section>
	 
	    
          <div class="trapezoid " style="margin:auto;"></div>
         
	
	  <?php include 'include/footer_script.php'; ?>
	  
        <script>

            $(document).ready(function(){
			  $(".clickhandler").click(function(){
				  var el = $(this).parents('.selectbtn').find('input[type="checkbox"]');
				  $(el).attr('checked', true);
				  console.log(el);
			  })	 
				
			  $(".clickhandler").click(function(){
				  
				 var  clickhandler = $(".clickhandler").val();
				 
				 
				 $var obj ={
					
					f_clickhandler : clickhandler
					
				 }
				  
				  $.ajax({
					   type : 'POST',
					   url : "service/ticket.php",
					   data : obj,
					   success: function(resp){
						
						}
				  })
				  
			  })	
				

			});
        		
        </script>	  
	 
	 </body>
   
</html>
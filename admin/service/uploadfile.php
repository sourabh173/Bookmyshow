<?php

   $imagefile = $_FILES['imagefile'];
   $filename = $_POST['filename'];
  
	$tempname = $imagefile['tmp_name'];
    if($filename == ''){
		$date = date('y-m-d');
		$rand = rand(1000, 9999);
		$filename = 'list_image-'.$date.'-'.$rand.'.jpg';
	} 
	
	//echo $filename;
	
	$move = move_uploaded_file($tempname, '../image/list_image/'.$filename);
	
	echo $filename;



?>
   
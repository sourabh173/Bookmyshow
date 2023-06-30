<?php

   $artistfile = $_FILES['artistfile'];
   $fileartist = $_POST['fileartist'];
  
	$tempname = $artistfile['tmp_name'];
    if($fileartist == ''){
		$date = date('y-m-d');
		$rand = rand(1000, 9999);
		$fileartist = 'list_image-'.$date.'-'.$rand.'.jpg';
	} 
	
	//echo $fileartist;
	
	$move = move_uploaded_file($tempname, '../image/artist_image/'.$fileartist);
	
	echo $fileartist;



?>
   
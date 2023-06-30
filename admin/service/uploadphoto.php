<?php

   $photofile = $_FILES['photofile'];
   $fileimage = $_POST['fileimage'];
  
   $tempname = $photofile['tmp_name'];
    if($fileimage == ''){
		$date = date('y-m-d');
		$rand = rand(1000, 9999);
		$fileimage = 'list_image-'.$date.'-'.$rand.'.jpg';
	}

 


    $move = move_uploaded_file($tempname, '../image/detail_image/'.$fileimage);
	
	echo $fileimage;



?>
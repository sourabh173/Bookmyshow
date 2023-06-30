<?php

    $imagefile = $_FILES['imagefile'];
	$filename = $_POST['filename'];
	$tempname = $imagefile['tmp_name'];
	
	if($filename == ''){
		$date = date('y-m-d');	
		$rand = rand(1000, 9999);   	
		$filename = 'category-'.$date.'-'.$rand.'.jpg';
	}
	
   
	$move = move_uploaded_file($tempname, '../image/category/'.$filename);
	
	echo $filename;


?>
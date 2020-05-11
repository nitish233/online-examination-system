<?php
 if (isset($_POST['submit']))
 {
	$name=$_POST['photo'];
	$photo=$_FILES['photo'];


	print_r($name);
	//echo "<br>";
	
	$filename=$photo['name'];
	print_r($filename);
// echo "<br>";
	$fileerror=$photo['error'];
// print_r($fileerror);
	$filetmp=$photo['tmp_name'];
	$fileext=explode('.', $filename);
	$filecheck=strtolower(end($fileext));

	$fileextstored=array('pdf','png','jpg','jpeg');
	if (in_array($filecheck, $fileextstored))
	 {
		$destinationfile='upload/'.$filename;
		move_uploaded_file($filetmp, $destinationfile);


}

}
?>

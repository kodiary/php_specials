<?php
$caption = $_POST['caption'];
if($_FILES['file_name']['name'])
{
	$name = $_FILES['file_name']['name'];
	$name_arr = explode('.',$name);
	$ext = end($name_arr);
	$unique = date('YmdHis').'_'.rand(1,999999).'.'.$ext;
	if(move_uploaded_file($_FILES['file_name']['tmp_name'], 'uploads/'.$unique))
	{
		$link = mysqli_connect("localhost","root","mysql","php_specials");
		$q = "INSERT INTO images (caption,image) VALUES('".$caption."','".$unique."')";
		mysqli_query($link,$q);
	}
}

?>
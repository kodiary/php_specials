<?php
$caption = $_POST['caption'];
if($_FILES['image_name']['name'])
{
	$name = $_FILES['image_name']['name'];
	$unique = date('YmdHis').'_'.rand(1,99999999);

	$name_arr = explode('.',$name);
	$ext = end($name_arr);

	$final_name = $unique.'.'.$ext;

	if($ext=='jpg' || $ext=='png' || $ext == 'gif')
	{
		if(move_uploaded_file($_FILES['image_name']['tmp_name'], 'uploads/'.$final_name))
		{
			$link = mysqli_connect("localhost","root","mysql","php_specials");
			$q = "INSERT INTO images (caption,image) VALUES('".$caption."','".$final_name."')";
			mysqli_query($link,$q);
			echo "The file was uploaded successfully";
		}
		else
		{
			echo "There was problem uploading your file";
		}
	}
	else
	{
		echo "Invalid file extension";
	}

}

?>
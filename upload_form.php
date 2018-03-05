<!DOCTYPE html>
<html>
<head>
	<title>Image Upload</title>
</head>
<body>
	<h1>Image Upload</h1>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		Caption: <input type="text" name="caption"> <br><br>
		Browse: <input type="file" name="image_name"> <br><br>
		<input type="submit" value="Upload">
	</form>
</body>
</html>
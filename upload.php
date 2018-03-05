<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
</head>
<body>
	<h1>File Upload</h1>
	<form action="upload_file.php" method="post" enctype="multipart/form-data">
		Caption: <input type="text" name="caption"><br><br>
		Browse: <input type="file" name="file_name"><br><br>
		<input type="submit" value="Upload">
	</form>
</body>
</html>
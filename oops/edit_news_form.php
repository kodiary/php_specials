<?php
include('inc.php');
$obj = new Inc();
$id = $_GET['id'];
$result = $obj->select('news','id='.$id);
$news = $obj->fetch($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit News</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/dist/css/bootstrap.css">
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>Edit News</h1>
				<form action="update_news.php" method="post">
					<input type="hidden" name="id" value="<?php echo $news->id;?>">
					<div class="form-group">
						<input type="text" name="title" value="<?php echo $news->title;?>" class="form-control" placeholder="Title">
					</div>
					<div class="form-group">
						<textarea placeholder="Description" class="form-control" name="description"><?php echo $news->description;?></textarea>
					</div>
					<div class="form-group">
						<input placeholder="Author" value="<?php echo $news->author;?>" type="text" name="author" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-info" value="Submit" >
					</div>
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</body>
</html>
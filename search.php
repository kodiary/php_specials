<!DOCTYPE html>
<html>
<head>
	<title>News</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h1>Search News</h1>
		<form method="get" action="">
			



			<div class="row">
				<div class="col-md-5">
					<input type="text" name="keyword" class="form-control">
				</div>
				<div class="col-md-3">
					<input type="submit" value="Search" class="btn btn-default">
				</div>
				<div class="clearfix"></div>
			</div>
 
		</form>
		<hr>
		<table class="table table-bordered table-striped">
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Description</th>
				<th>Author</th>
			</tr>
			<?php
				if(isset($_GET['keyword']))
				{
					$keyword = $_GET['keyword'];
				}
				else
				{
					$keyword = '';
				}
				$link = mysqli_connect("localhost","root","mysql","php_specials");
				if(!$keyword)
				{
					$q = "SELECT * FROM news";
				}
				else
				{
					$q = "SELECT * FROM news WHERE title LIKE '%".$keyword."%' OR description LIKE '%".$keyword."%' OR author LIKE '%".$keyword."%'";
				}
				$result = mysqli_query($link,$q);
				while($news = mysqli_fetch_object($result))
				{
					?>
					<tr>
						<td><?php echo $news->id;?></td>
						<td><?php echo $news->title;?></td>
						<td><?php echo substr($news->description,0,50).'...';?></td>
						<td><?php echo $news->author;?></td>
					</tr>
					<?php
				}
			?>
		</table>
	</div>
</body>
</html>
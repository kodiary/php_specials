<?php
include('inc.php');
$obj = new Inc();
?>
<!DOCTYPE html>
<html>
<head>
	<title>News Listing</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/dist/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<?php
		$result = $obj->select('news');
		if($obj->check_num($result)>0)
		{
			?>
			<h1>News Listing</h1>
			<a href="#" class="btn btn-info">Add New News</a>
			<hr>
			<table class="table table-bordered">
				<tr>
					<th>Title</th>
					<th>Description</th>
					<th>Action</th>
				</tr>
				<?php
				while($row = $obj->fetch($result))
				{
					?>
					<tr>
						<td><?php echo $row->title;?></td>
						<td><?php echo substr($row->description,0,50).'...';?></td>
						<td><a href="#" class="btn btn-primary">Edit</a> <a href="delete_news.php?id=<?php echo $row->id;?>" class="btn btn-danger">Delete</a></td>
					</tr>
					<?php
				}
				?>
			</table>
			<?php
		}
		?>
	</div>
</body>
</html>

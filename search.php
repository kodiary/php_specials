<!DOCTYPE html>
<html>
<head>
	<title>News</title>
</head>
<body>
	<br><br>
	<form method="get" action="">
		<input type="text" name="keyword"> <input type="submit" value="Search">
	</form>
	<br><br>
	<table border="1" width="100%">
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
</body>
</html>
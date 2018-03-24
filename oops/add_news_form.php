<!DOCTYPE html>
<html>
<head>
	<title>Add New News</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/dist/css/bootstrap.css">
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>Add New News</h1>
				<form action="save_news.php" method="post">
					<div class="form-group">
						<input type="text" name="title" class="form-control" placeholder="Title">
					</div>
					<div class="form-group">
						<textarea placeholder="Description" class="form-control" name="description"></textarea>
					</div>
					<div class="form-group">
						<input placeholder="Author" type="text" name="author" class="form-control">
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
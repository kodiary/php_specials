<!DOCTYPE html>
<html>
<head>
	<title>Comments</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
	<div class="container">
		<p>&nbsp;</p>
		<div class="comment_listing"></div>
		<h1>Post Your Comment Below</h1>
		<div class="col-md-5">
			<input type="text" class="name form-control" placeholder="Name"><br>
			<input type="text" class="email form-control" placeholder="Email"><br>
			<textarea class="comment form-control"></textarea>
			<p>&nbsp;</p>
			<a href="javascript:void(0)" class="btn btn-primary submit">Submit</a>
		</div>
		<div class="clearfix"></div>
	</div>
</body>
</html>
<script type="text/javascript">
	function listComments()
		{
			$.ajax({
				url:'comment_list.php',
				success:function(res){
					$('.comment_listing').html(res);
				}
			})
		}
	$(function(){
		
		
		listComments();
		setInterval(function(){
			listComments();
		},10000);
		$('.submit').click(function(){
			var name = $('.name').val();
			var email = $('.email').val();
			var comment = $('.comment').val();
			$.ajax({
				url:'save_comment.php',
				data:'name='+name+'&email='+email+'&comment='+comment,
				type:'post',
				success:function()
				{
					alert("Your comment has been posted");
					listComments();
				}
			})
		})
	})
</script>

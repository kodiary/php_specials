<!DOCTYPE html>
<html>
<head>
	<title>Drag and Drop Sorting</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

<?php
$link = mysqli_connect("localhost","root","mysql","php_specials");
$q = "SELECT * FROM news_copy ORDER BY display_order ASC";
$result = mysqli_query($link,$q);
if(mysqli_num_rows($result)>0)
{
	?>
	<table class="table table-striped">
		<tr>
			<th>Title</th>
			<th>Description</th>
			<th>Author</th>
		</tr>
		<tbody class="sortable">
	
		<?php
		while($row=mysqli_fetch_object($result))
		{
			?>
			<tr id="<?php echo $row->id;?>">
				<td><?php echo $row->title;?></td>
				<td><?php echo substr($row->description,0,50).'...';?></td>
				<td><?php echo $row->author;?></td>
			</tr>
			<?php
		}
		?>
	</tbody>
	</table>
	<?php
}
?>



<script type="text/javascript">
	$(function(){
		$('.sortable').sortable({
			stop:function()
			{
				var ids = '';
				$('.sortable tr').each(function(){
					id = $(this).attr('id');
					if(ids=='')
					{
						ids = id;
					}
					else
					{
						ids = ids+','+id;
					}
				})
				$.ajax({
					url:'save_order.php',
					data:'ids='+ids,
					type:'post',
					success:function()
					{
						alert('Order saved successfully');
					}
				})
			}
		});
	});
</script>
</body>
</html>
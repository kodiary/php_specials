<!DOCTYPE html>
<html>
<head>
	<title>Basic Javascript</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
	<!--
	<div id="mydiv">
		adfadfadf<br>
		adfadfadf<br>
		adfadfadf<br>
	</div>
	<div>
		adf
		adf
		adafd
	</div>
	<a href="#" class="anc">Click Here</a>

	<script type="text/javascript">
		$(function(){
			$('.anc').hover(function(){
				$('#mydiv').hide();
			})
		});
	</script>-->

	<div class="mydiv">
		
	</div>
	<a href="#" class="anc">Click Me</a>
	<script type="text/javascript">
		$(function(){
			$('.anc').click(function(){
				$('.mydiv').prepend('This is a text<br/>');
			})
		})
	</script>
</body>
</html>
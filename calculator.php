<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<form method="post" action="calculate.php">
		<input type="text" name="num1" placeholder="First Number">
		<br>
		<input type="text" name="num2" placeholder="Second Number">
		<br>
		<select name="operation">
			<option value="add">Add</option>
			<option value="minus">Minus</option>
			<option value="divide">Divide</option>
			<option value="multiply">Multiply</option>
		</select>
		<br><br>
		<input type="submit" name="submit" value="Calculate">
	</form>
</body>
</html>
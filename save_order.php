<?php
$link = mysqli_connect("localhost","root","mysql","php_specials");
$ids = $_POST['ids'];
$arr = explode(',',$ids);
for($i=1;$i<=count($arr);$i++)
{
	$q = "UPDATE news_copy SET display_order = ".$i." WHERE id = ".$arr[$i-1];
	mysqli_query($link,$q);
}
?>
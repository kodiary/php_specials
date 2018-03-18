<?php
$link = mysqli_connect("localhost","root","mysql","php_specials");
$name = mysqli_real_escape_string($link,$_POST['name']);
$email = mysqli_real_escape_string($link,$_POST['email']);
$comment = mysqli_real_escape_string($link,$_POST['comment']);
$comment_date = date('Y-m-d H:i:s');

$q = "INSERT INTO comments (name,email,comment,comment_date) VALUES('".$name."','".$email."','".$comment."','".$comment_date."')";
mysqli_query($link,$q);
?>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$link = mysqli_connect('localhost','root','mysql','php_specials');
$q = "INSERT INTO users (name,email,gender) VALUES('".$name."','".$email."','".$gender."')";
mysqli_query($link,$q);
?>
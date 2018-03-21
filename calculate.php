<?php
include('inc.php');

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operation = $_POST['operation'];

$obj = new Inc($num1,$num2,$operation);

echo $obj->$operation();/*

if($operation=='add')
{
	$output = $obj->add();
	echo $output;
}
if($operation=='minus')
{
	$output = $obj->minus();
	echo $output;
}
if($operation=='multiply')
{
	$output = $obj->multiply();
	echo $output;
}
if($operation=='divide')
{
	$output = $obj->divide();
	echo $output;
}*/
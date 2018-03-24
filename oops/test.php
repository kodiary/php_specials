<?php
include('inc.php');
$obj = new Inc();
$arr['title'] = 'Sample title';
$arr['description'] = 'Sample description goes here';
$arr['author'] = 'Anwar Ali';

$obj->update('news',2,$arr);
?>
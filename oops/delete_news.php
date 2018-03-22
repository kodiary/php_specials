<?php
include('inc.php');
$obj = new Inc();
$id = $_GET['id'];
$obj->delete('news',$id);
$obj->redirect('news_list.php');
?>
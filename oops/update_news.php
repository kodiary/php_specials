<?php
include('inc.php');
$obj = new Inc();
$id = $_POST['id'];
$arr['title'] = $obj->clean($_POST['title']);
$arr['description'] = $obj->clean($_POST['description']);
$arr['author'] = $obj->clean($_POST['author']);
$obj->update('news',$id,$arr);
$obj->redirect('news_list.php');
?>
<?php
include('inc.php');
$obj = new Inc();
$arr['title'] = $obj->clean($_POST['title']);
$arr['description'] = $obj->clean($_POST['description']);
$arr['author'] = $obj->clean($_POST['author']);
$obj->insert('news',$arr);
$obj->redirect('news_list.php');
?>
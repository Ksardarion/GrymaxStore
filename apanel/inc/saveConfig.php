<?php
require_once '../../sys/init.php';

if(isset($_POST['saveIndexPageBlocks'])){
	$title = $_POST['title'];
	$desc = $_POST['description'];
	$grymaxShop::saveIndexPageBlocks($title, $desc);

	header('Location: ' . $_SERVER['HTTP_REFERER']);
} elseif(isset($_POST['saveMetaData'])){
	$indexTitle = $_POST['indexTitle'];
	$grymaxShop::saveMetaData($indexTitle);
}
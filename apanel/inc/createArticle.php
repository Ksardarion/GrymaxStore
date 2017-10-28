<?php
require_once '../../sys/init.php';
if(isset($_POST['add'])){
	$name = $_POST['name'];
	$desc = $_POST['description'];
	$price = $_POST['price'];

	$arts::create($name, $desc, $price);
}
?>
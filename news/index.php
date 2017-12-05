<?php
require_once '../sys/init.php';
require_once '../sys/classes/news.class.php';
?>
<!DOCTYPE html>
<html>
<?php
require_once '../sys/header.html';
?>
<link rel="stylesheet" href="../sys/style/news.css">
<body class="pushable">
<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">
  	<?php require_once '../sys/tpl/headerMenu.tpl.php';?>
	<?php
	require_once '../sys/tpl/showNews.tpl.php';
	?>
  </div>
</div>
</body>
</html>
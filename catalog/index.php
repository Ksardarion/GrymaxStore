<?php
require_once '../sys/init.php';
require_once '../sys/classes/catalog.class.php';
?>
<!DOCTYPE html>
<html>
<?php
require_once '../sys/header.html';
?>
<body class="pushable">
<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">
  	<?php require_once '../sys/tpl/headerMenu.tpl.php';?>
	<?php
	require_once '../sys/tpl/catalog.tpl.php';
	?>
  </div>
</div>
</body>
</html>
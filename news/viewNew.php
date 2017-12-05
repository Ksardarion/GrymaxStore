<?php
/**
 * Created by PhpStorm.
 * User: coolk_000
 * Date: 12/4/2017
 * Time: 1:35 AM
 */
require_once '../sys/init.php';
require_once '../sys/classes/news.class.php';

$newId = $_GET['id'];

$new = News::getNew($newId);

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
        require_once '../sys/tpl/showCurrNew.php';
        ?>
    </div>
</div>
</body>
</html>

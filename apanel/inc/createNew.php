<?php
/**
 * Created by PhpStorm.
 * User: coolk_000
 * Date: 12/2/2017
 * Time: 6:35 PM
 */
require_once '../../sys/init.php';
require_once '../../sys/classes/news.class.php';
if(isset($_POST['add'])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];
    News::addNews($title, $content, $author);
    header('Location: ../index.php');
}
?>
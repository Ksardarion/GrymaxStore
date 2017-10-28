<?php
if (!empty($_COOKIE['sid'])) {
    // check session id in cookies
    session_id($_COOKIE['sid']);
}
session_start();
require_once "settings.php";
require_once "classes/db.class.php";
require_once "classes/article.class.php";
require_once 'classes/auth.class.php';
require_once 'classes/user.class.php';
date_default_timezone_set("Europe/Kiev");
$timeNow = date('Y-m-d');
try {
    $db = DB::connect(HOST, DB_NAME, USER, DB_PASS);
} catch (ExceptionPdoNotExists $e) {
    @mysqli_connect(HOST, USER, DB_PASS) or die('MySQL server connection are not exist');
    @mysqli_select_db(DB_NAME) or die('Can`t access to select data base');
    mysqli_query('SET NAMES "utf8"');

    die($e->getMessage());
} catch (Exception $e) {
    die('DB connection error: ' . $e->getMessage());
}

$arts = new Articles();

if (isset($_SESSION["user_id"])) {
	$user = new User($_SESSION["user_id"]);
}
?>
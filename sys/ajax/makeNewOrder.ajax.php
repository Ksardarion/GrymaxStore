<?php
if (isset($_POST)){
    require_once '../init.php';
    require_once '../classes/order.class.php';
    $data = $_POST['data'];
//    $readyData = json_decode($data);
//
    $thisOrder = new Order();
    $thisOrder->createOrder($data);
    var_dump($_POST);
} else {
    echo 0;
}
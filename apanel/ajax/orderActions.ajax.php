<?php
/**
 * Created by PhpStorm.
 * User: coolk_000
 * Date: 12/2/2017
 * Time: 3:26 PM
 */
require_once '../../sys/init.php';
require_once '../../sys/classes/order.class.php';
if(isset($_POST)){
    $action = $_POST['data']['action'];
    $orderId = $_POST['data']['orderId'];
    switch ($action){
        case 'isCompleted':
            echo Order::makeOrderCompleted($orderId);
            break;
        case 'edit':
            break;
        case 'notActive':
            break;
    }
}
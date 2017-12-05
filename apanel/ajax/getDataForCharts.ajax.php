<?php
/**
 * Created by PhpStorm.
 * User: coolk_000
 * Date: 12/3/2017
 * Time: 3:51 AM
 */
require_once '../../sys/init.php';
//require_once '../../sys/classes/db.class.php';
//require_once '../../sys/classes/grymaxShop.class.php';

$required = $_POST['required'];
//var_dump($_POST);
switch ($required){
    case 'visitors':
        $currMounthAndYear = date('Y-m');
        $daysInMounth = 0 + date('t');
        $daysData = array();
        for($i = 1; $i <= $daysInMounth; $i++){
            $currDate = $currMounthAndYear . '-' . $i;
            $state1 = 'WHERE `time` = "' . $currDate . '"';
            $state2 = 'WHERE `lastvisittime` = "' . $currDate . '"';
            $daysData['views'][$i] = grymaxShop::getCountFromTable('pagesviews', $state1);
            $daysData['visitors'][$i] = grymaxShop::getCountFromTable('pagesvisitors', $state2);
        }
        $response = json_encode(array($daysData['views'], $daysData['visitors'], $daysInMounth));
        echo $response;
        break;
}
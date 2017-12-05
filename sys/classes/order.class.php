<?php
class Order {
    public static function getAllOrders(){
        $qForGetting = "SELECT * FROM `orders`";
        $getOrders = DB::connect()->prepare($qForGetting);
        $getOrders->execute();
        return $getOrders;
    }
    public function getOrderById($orderId){
    	$qForGetting = "SELECT * FROM `orders` WHERE `id` = '?'";
    	$getOrder = DB::connect()->prepare($qForGetting);
    	$getOrder->execute(Array($orderId));
    	return $getOrder;
    }
    public function prepareOrder($userId, $totalPrice){
        $date = date('Y-m-d H:m:s');
    	$qForAdding = "INSERT INTO `orders` (`userId`, `created`, `totalPrice`) VALUES (?, ?, ?)";
    	$makeOrder = DB::connect()->prepare($qForAdding);
    	return $makeOrder->execute(Array($userId, $date, $totalPrice));
    }

    public function addItemToOrder($itemId, $orderId, $quantity, $itemPrice){
        $query = "INSERT INTO `orderitems` (`itemId`, `orderId`, `quantity`, `itemPrice`) VALUES (?, ?, ?, ?)";
        $adding = DB::connect()->prepare($query);
        return $adding->execute(Array($itemId, $orderId, $quantity, $itemPrice));
    }
    public function createOrder($dataForOrder = Array()){
        $userId = $dataForOrder['customer'];
        $totalPrice = $dataForOrder['totalPrice'];
        $items = $dataForOrder['products'];
        $this->prepareOrder($userId, $totalPrice);
        $lastId = DB::connect()->lastInsertId();
        foreach ($items as $item){
            $this->addItemToOrder($item['id'], $lastId, $item['quantity'], $item['price']);
        }
    }
    public static function makeOrderCompleted($orderId){
        $sql = "UPDATE `orders` SET `isCompleted` = 1 WHERE `id` = ?";
        $updating = DB::connect()->prepare($sql);
        return $updating->execute(Array($orderId));
    }
}
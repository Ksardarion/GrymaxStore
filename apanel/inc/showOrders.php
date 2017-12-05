<?php
/**
 * Created by PhpStorm.
 * User: coolk_000
 * Date: 12/2/2017
 * Time: 12:38 AM
 */
$orders = Order::getAllOrders();
?>
<table class="table table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>User #</th>
        <th>Created</th>
        <th>Total price</th>
        <th>Completed</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while($order = $orders->fetch()):
        if($order['userId'] == 0){
            $customerName = 'Guest';
        } else {
            $customer = new User($order['userId']);
            $customerName = $customer->firstName . ' ' . $customer->lastName;
        }
        $orderStatus = ($order['isCompleted']) ? 'Yes' : 'No';
        ?>
        <tr>
            <th scope="row"><?=$order['id']?></th>
            <td><?=$customerName?></td>
            <td><?=$order['created']?></td>
            <td><?=$order['totalPrice']?></td>
            <th><?=$orderStatus?></th>
            <td><a data-id="<?=$order['id']?>" class="makeComplited" href="#"><i class="icon-mail"></i></a> <a href="#"><i class="icon-pencil-case"></i></a> <a href="#"><i class="icon-grid"></i></a></td>
        </tr>
        <?php
    endwhile;
    ?>
    </tbody>
</table>
<div class="ui vertical inverted sidebar menu left">
    <a class="active item">Home</a>
    <a class="item">Доставка і оплата</a>
    <a class="item">Гарантія</a>
    <a class="item">Акції</a>
    <a class="item" href="/store/questions and answers/questions and answers.php" >Запитання і відповіді</a>
    <?php if (userAuth::isAuthorized()): ?>
        <a class="item"><?=$user->login?></a>
    <?php else: ?>
        <a class="item" href="/store/authentication/authentication.php">Увійти</a>
        <a class="item" href="/store/authentication/registration.php">Реєстрація</a>
    <?php endif;?>
</div>
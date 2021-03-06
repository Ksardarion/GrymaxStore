    <div class="ui container ">
      <div class="ui large secondary inverted pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
        <a class="item" href="/index.php">Home</a>
        <a class="item" href="/news/index.php">Новини</a>
        <a class="item">Доставка і оплата</a>
        <a class="item">Гарантія</a>
        <a class="item" href="/promoakcie/promoakcie.html" >Акції</a>
        <a class="item" href="/questions and answers/questions and answers.html">Запитання і відповіді</a>
        <div class="right item">
          <div class="ui label">
            <i class="shop icon my-cart-icon pointing"></i> <i class="my-cart-badge"></i>
          </div>
          <?php if (userAuth::isAuthorized()): ?>
            <a class="ui inverted button"><?=$user->login?></a>
            <a href="/authentication/logOut.php" class="ui inverted button">LogOut</a>
          <?php else: ?>
            <a class="ui inverted button" href="/authentication/authentication.php">Увійти</a>
            <a class="ui inverted button" href="/authentication/registration.php">Реєстрація</a>
          <?php endif;?>
        </div>
      </div>
    </div>
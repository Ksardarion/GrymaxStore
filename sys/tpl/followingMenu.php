<div class="ui large top fixed hidden menu">
    <div class="ui container">
        <a class="active item">Home</a>
        <a class="item">Work</a>
        <a class="item">Company</a>
        <a class="item">Careers</a>
        <div class="right menu">
            <?php if (userAuth::isAuthorized()): ?>
                <div class="item">
                    <a class="ui button"><?=$user->login?></a>
                </div>
            <?php else: ?>
                <div class="item">
                    <a class="ui button">Log in</a>
                </div>
                <div class="item">
                    <a class="ui primary button">Sign Up</a>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>
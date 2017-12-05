<?php
$articles = $arts->getArticles(12);
?>
<div class="ui cards centered">
<?php while($article = $articles->fetch()):?>
      <div class="card iphone-card">
        <div class="image">
          <img src="/store/<?=$article['imgPath']?>" data-object-fit="contain">
        </div>
        <div class="content mt-20">
          <div class="header"><?=$article['name']?></div>
          <div class="meta">
            <a>What need to write here?</a>
          </div>
          <div class="description">
            <?=nl2br($article['description'])?>
          </div>
        </div>
        <div class="extra content">
          <button data-id="<?=$article['id']?>" data-name="<?=$article['name']?>" data-summary="<?=$article['description']?>" data-price="<?=$article['price']?>" data-quantity="1" data-image="/store/<?=$article['imgPath']?>" class="ui primary button right floated my-cart-btn">
            <i class="shop icon"></i> Add to Cart
          </button>
          <span>
            <i class="dollar icon"></i>
            <?=$article['price']?>
          </span>
        </div>
      </div>
<?php endwhile; ?>
</div>
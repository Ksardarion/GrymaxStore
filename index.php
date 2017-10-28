<?php
    require_once 'sys/init.php'
?>
<!DOCTYPE html>
<!-- saved from url=(0046)https://semantic-ui.com/examples/homepage.html -->
<html>
<?php
    require_once 'sys/header.html';
?>
<body class="pushable">

<!-- Following Menu -->
<?php
    require_once 'sys/tpl/followingMenu.php';
?>

<!-- Sidebar Menu -->
<?php
    require_once 'sys/tpl/sidebarMenu.tpl.php';
?>


<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">

    <div class="ui container ">
      <div class="ui large secondary inverted pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
<!--         <a class="item" id="menu-icon">
          <i class="sidebar icon large"></i>
        </a> -->
        <a class="item" href="/store/apanel/index.php">Home</a>
        <a class="item">Новини</a>
        <a class="item">Доставка і оплата</a>
        <a class="item">Гарантія</a>
        <a class="item" href="/store/promoakcie/promoakcie.html" >Акції</a>
        <a class="item" href="/store/questions and answers/questions and answers.html">Запитання і відповіді</a>
        <div class="right item">
            <?php if (userAuth::isAuthorized()): ?>
                <a class="ui inverted button"><?=$user->login?></a>
                <a href="" class="ui inverted button">LogOut</a>
            <?php else: ?>
                <a class="ui inverted button" href="/store/authentication/authentication.php">Увійти</a>
                <a class="ui inverted button" href="/store/authentication/registration.php">Реєстрація</a>
            <?php endif;?>
<!--          <a class="ui inverted button" href="/store/authentication/authentication.html">Увійти</a>-->
<!--          <a class="ui inverted button" href="/store/authentication/registration.html">Реєстрація</a>-->
        </div>
      </div>
    </div>
    
    <!-- Grid -->
    <section class="slider">
      <div class="slide slide--current" data-content="content-1">
        <div class="slide__mover">
          <div class="zoomer flex-center">
            <img class="zoomer__image" src="images/iphone.png" alt="iPhone" />
            <div class="preview">
              <img src="images/iphone-content-preview.png" alt="iPhone app preview" />
              <div class="zoomer__area zoomer__area--size-2"></div>
            </div>
          </div>
        </div>
        <h2 class="slide__title"><span>The Classy</span> iPhone 6</h2>
      </div>
      <div class="slide" data-content="content-2">
        <div class="slide__mover">
          <div class="zoomer flex-center">
            <img class="zoomer__image" src="images/ipad.png" alt="iPad Mini" />
            <div class="preview">
              <img src="images/ipad-content-preview.png" alt="iPad Mini app preview" />
              <div class="zoomer__area zoomer__area--size-4"></div>
            </div>
          </div>
        </div>
        <h2 class="slide__title"><span>The Fantastic</span> iPad Mini</h2>
      </div>
      <div class="slide" data-content="content-3">
        <div class="slide__mover">
          <div class="zoomer flex-center">
            <img class="zoomer__image" src="images/macbook.png" alt="MacBook" />
            <div class="preview">
              <img src="images/macbook-content-preview.jpg" alt="MacBook app preview" />
              <div class="zoomer__area zoomer__area--size-3"></div>
            </div>
          </div>
        </div>
        <h2 class="slide__title"><span>The Amazing</span> MacBook</h2>
      </div>
      <div class="slide" data-content="content-4">
        <div class="slide__mover">
          <div class="zoomer flex-center">
            <img class="zoomer__image" src="images/imac.png" alt="iMac" />
            <div class="preview">
              <img src="images/imac-content-preview.jpg" alt="iMac app preview" />
              <div class="zoomer__area zoomer__area--size-5"></div>
            </div>
          </div>
        </div>
        <h2 class="slide__title"><span>The Glorious</span> iMac</h2>
      </div>
      <div class="slide" data-content="content-5">
        <div class="slide__mover">
          <div class="zoomer flex-center">
            <img class="zoomer__image" src="images/apple-watch.png" alt="Apple Watch" />
            <div class="preview rounded">
              <img src="images/apple-watch-content-preview.png" alt="Apple Watch app preview" />
              <div class="zoomer__area zoomer__area--size-1"></div>
            </div>
          </div>
        </div>
        <h2 class="slide__title"><span>The Fabulous</span> Apple Watch</h2>
      </div>
      <nav class="slider__nav">
        <button class="button button--nav-prev"><i class="icon-slider icon--arrow-left"></i><span class="text-hidden">Previous product</span></button>
        <button class="button button--zoom"><i class="icon-slider icon--zoom"></i><span class="text-hidden">View details</span></button>
        <button class="button button--nav-next"><i class="icon-slider icon--arrow-right"></i><span class="text-hidden">Next product</span></button>
      </nav>
    </section>
    <!-- /slider-->
    <section class="slider-content content">
      <div class="content__item" id="content-1">
        <img class="content__item-img rounded-right" src="images/iphone-content.png" alt="Apple Watch Content" />
        <div class="content__item-inner">
          <h2>The iPhone 6</h2>
          <h3>Incredible performance for powerful apps</h3>
          <p>Built on 64-bit desktop-class architecture, the new A8 chip delivers more power, even while driving a larger display. The M8 motion coprocessor efficiently gathers data from advanced sensors and a new barometer. And with increased battery life, iPhone 6 lets you do more, for longer than ever.</p>
          <p><a href="https://www.apple.com/iphone-6/technology/">Learn more about this technology &xrarr;</a></p>
        </div>
      </div>
      <div class="content__item" id="content-2">
        <img class="content__item-img rounded-right" src="images/ipad-content.jpg" alt="iPad Mini Content" />
        <div class="content__item-inner">
          <h2>The iPad Mini</h2>
          <h3>Desktop-class architecture without a desktop</h3>
          <p>Don’t let its size fool you. iPad mini 3 is powered by an A7 chip with 64-bit desktop-class architecture. A7 delivers amazing processing power without sacriﬁcing battery life. So you get incredible performance in a device you can take with you wherever you go.</p>
          <p><a href="https://www.apple.com/ipad-mini-3/performance/">Learn more about Performance &xrarr;</a></p>
        </div>
      </div>
      <div class="content__item" id="content-3">
        <img class="content__item-img rounded-right" src="images/macbook-content.jpg" alt="MacBook Content" />
        <div class="content__item-inner">
          <h2>The MacBook</h2>
          <h3>It's the future of the notebook</h3>
          <p>With the new MacBook, we set out to do the impossible: engineer a full-size experience into the lightest and most compact Mac notebook ever. That meant reimagining every element to make it not only lighter and thinner but also better. The result is more than just a new notebook. It's the future of the notebook.</p>
          <p><a href="https://www.apple.com/macbook/design/">Learn more about the design &xrarr;</a></p>
        </div>
      </div>
      <div class="content__item" id="content-4">
        <img class="content__item-img rounded-right" src="images/imac-content.jpg" alt="iMac Content" />
        <div class="content__item-inner">
          <h2>The iMac</h2>
          <h3>Engineered to the very last detail</h3>
          <p>Every new Mac comes with Photos, iMovie, GarageBand, Pages, Numbers, and Keynote. So you can be creative with your photos, videos, music, documents, spreadsheets, and presentations right from the start. You also get great apps for email, surfing the web, sending texts, and making FaceTime calls — there’s even an app for finding new apps.</p>
          <p><a href="https://www.apple.com/imac/built-in-apps/">Learn more about the iMac's features &xrarr;</a></p>
        </div>
      </div>
      <div class="content__item" id="content-5">
        <img class="content__item-img rounded-right" src="images/apple-watch-content.png" alt="Apple Watch Content" />
        <div class="content__item-inner">
          <h2>The Apple Watch</h2>
          <h3>Entirely new ways to stay in touch</h3>
          <p>Apple Watch makes all the ways you're used to communicating more convenient. And because it sits right on your wrist, it can add a physical dimension to alerts and notifications. For example, you’ll feel a gentle tap with each incoming message. Apple Watch also lets you connect with your favorite people in fun, spontaneous ways — like sending a tap, a sketch, or even your heartbeat. </p>
          <p><a href="https://www.apple.com/watch/new-ways-to-connect/">Learn more about new ways to connect &xrarr;</a></p>
        </div>
      </div>
      <button class="button button--close"><i class="icon-slider icon--circle-cross"></i><span class="text-hidden">Close content</span></button>
    </section>
  </div>


  <div class="ui vertical stripe">
    <div class="ui cards centered">

      <div class="card iphone-card">
        <div class="image">
          <img src="images/phones/iphone3.png" data-object-fit="contain">
        </div>
        <div class="content mt-20">
          <div class="header">Matt Giampietro</div>
          <div class="meta">
            <a>Friends</a>
          </div>
          <div class="description">
            Matthew is an interior designer living in New York.
          </div>
        </div>
        <div class="extra content">
          <button class="ui primary button right floated">
            Придбати
          </button>
          <span>
            <i class="dollar icon"></i>
            75 
          </span>
        </div>
      </div>

      <div class="card iphone-card">
        <div class="image">
          <img src="images/phones/iphone2.png" data-object-fit="contain">
        </div>
        <div class="content mt-20">
          <div class="header">Molly</div>
          <div class="meta">
            <span class="date">Coworker</span>
          </div>
          <div class="description">
            Molly is a personal assistant living in Paris.
          </div>
        </div>
        <div class="extra content">
<!--           <span class="right floated">
            Joined in 2011
          </span> -->
          

          <button class="ui primary button right floated">
            Придбати
          </button>
          
          <span>
            <i class="dollar icon"></i>
            35
          </span>
        </div>
      </div>

      <div class="card iphone-card">
        <div class="image">
          <img src="images/phones/iphone.png" data-object-fit="contain">
        </div>
        <div class="content mt-20">
          <div class="header">Elyse</div>
          <div class="meta">
            <a>Coworker</a>
          </div>
          <div class="description">
            Elyse is a copywriter working in New York.
          </div>
        </div>



        <div class="extra content">
            <button class="ui primary button right floated">
            Придбати
            </button>
          <span>
            <i class="dollar icon"></i>
            151
          </span>
        </div>
      </div>
    </div>
  </div>


  <div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
          <h3>"What a Company"</h3>
          <p>That is what they all say about us</p>
        </div>
        <div class="column">
          <h3>"I shouldn't have gone with their competitor."</h3>
          <p>
            <!-- <img src="./Homepage - Semantic_files/nan.jpg" class="ui avatar image"> <b>Nan</b> Chief Fun Officer Acme Toys -->
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="ui vertical stripe segment">
    <div class="ui text container">
      <h3 class="ui header">Breaking The Grid, Grabs Your Attention</h3>
      <p>Instead of focusing on content creation and hard work, we have learned how to master the art of doing nothing by providing massive amounts of whitespace and generic content that can seem massive, monolithic and worth your attention.</p>
      <a class="ui large button">Read More</a>
      <h4 class="ui horizontal header divider">
        <a href="https://semantic-ui.com/examples/homepage.html#">Case Studies</a>
      </h4>
      <h3 class="ui header">Did We Tell You About Our Bananas?</h3>
      <p>Yes I know you probably disregarded the earlier boasts as non-sequitur filler content, but its really true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.</p>
      <a class="ui large button">I'm Still Quite Interested</a>
    </div>
  </div>


  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">About</h4>
          <div class="ui inverted link list">
            <a href="https://semantic-ui.com/examples/homepage.html#" class="item">Sitemap</a>
            <a href="https://semantic-ui.com/examples/homepage.html#" class="item">Contact Us</a>
            <a href="https://semantic-ui.com/examples/homepage.html#" class="item">Religious Ceremonies</a>
            <a href="https://semantic-ui.com/examples/homepage.html#" class="item">Gazebo Plans</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Services</h4>
          <div class="ui inverted link list">
            <a href="https://semantic-ui.com/examples/homepage.html#" class="item">Banana Pre-Order</a>
            <a href="https://semantic-ui.com/examples/homepage.html#" class="item">DNA FAQ</a>
            <a href="https://semantic-ui.com/examples/homepage.html#" class="item">How To Access</a>
            <a href="https://semantic-ui.com/examples/homepage.html#" class="item">Favorite X-Men</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
    </div>
  </div>
</div>


  <script src="js/vendor/zoom-slider/classie.js"></script>
  <script src="js/vendor/zoom-slider/dynamics.min.js"></script>
  <script src="js/vendor/zoom-slider/main.js"></script>
  <!-- <script type="text/javascript" src="js/object-fit.js"></script> -->

</body>
</html>
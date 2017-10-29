<?php
    require_once 'sys/init.php'
?>
<!DOCTYPE html>
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
        </div>
      </div>
    </div>
    
    <!-- Grid -->
    <?php require_once 'sys/tpl/slider.php';?>
    <!-- /slider-->
    <?php require_once 'sys/tpl/sliderContent.php';?>
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
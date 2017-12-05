      <nav id="sidebar">
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="<?=$user->avatarPath?>" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5"><?=$user->firstName?> <?=$user->lastName?></h1>
            <p>Web Designer</p>
          </div>
        </div><span class="heading">Main</span>
        <ul class="list-unstyled">
          <li class="<?=$isActive['home']?>"><a href="index.php"><i class="icon-home"></i>Home</a></li>
          <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Articles </a>
            <ul id="dashvariants" class="collapse list-unstyled">
              <li><a href="articles.php">List</a></li>
              <li><a href="addArticle.php">Add new</a></li>
            </ul>
          </li>
          <li class="<?=$isActive['addNews']?>"> <a href="addNews.php"> <i class="icon-grid"></i>Add News</a></li>
          <li class="<?=$isActive['orders']?>"> <a href="orders.php"> <i class="icon-grid"></i>Orders list</a></li>
          <li class="<?=$isActive['users']?>"> <a href="users.php"> <i class="icon-user-1"></i>Users list</a></li>
          <li><a href="#systemSettings" aria-expanded="true" data-toggle="collapse"> <i class="icon-settings"></i>System configurations</a>
            <ul id="systemSettings" class="collapse list-unstyled">
              <li class="<?=$isActive['indexPageBlocks']?>"><a href="indexPageBlocks.php">Index Page Blocks</a></li>
              <li class="<?=$isActive['metaData']?>"><a href="metaData.php">Meta Data</a></li>
            </ul>
          </li>
            <!-- <li> <a href="articles.php"> <i class="icon-grid"></i>Articles list</a></li> -->
          <!-- <li> <a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts </a></li> -->
          <!-- <li> <a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li> -->
          <!-- <li> <a href="login.html"> <i class="icon-logout"></i>Login Page</a></li> -->
        </ul>
<!--         <span class="heading">Extras</span>
        <ul class="list-unstyled">
          <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-light-bulb"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
        </ul> -->
      </nav>
      <nav id="sidebar">
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5"><?=$user->firstName?> <?=$user->lastName?></h1>
            <p>Web Designer</p>
          </div>
        </div><span class="heading">Main</span>
        <ul class="list-unstyled">
          <li class="active"><a href="index.php"><i class="icon-home"></i>Home</a></li>
          <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Articles</a>
            <ul id="dashvariants" class="collapse list-unstyled">
              <li><a href="articles.php">List</a></li>
              <li><a href="addArticle.php">Add new</a></li>
            </ul>
          </li>
          <li> <a href="users.php"> <i class="icon-grid"></i>Users list</a></li>
        </ul>
      </nav>
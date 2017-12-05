<?php
$articles = $arts->getArticles();
?>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Description</th>
      <th>Price</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	while($article = $articles->fetch()):
  	?>
    <tr>
      <th scope="row"><?=$article['id']?></th>
      <td><?=$article['name']?></td>
      <td><?=$article['description']?></td>
      <td><?=$article['price']?></td>
    </tr>
    <?php
	endwhile;
	?>
  </tbody>
</table>
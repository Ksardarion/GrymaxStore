<?php
$news = News::getNews();
?>
<div class="ui cards centered">

<?php while($new = $news->fetch()):?>
	<div class="ui card">
        <a href="/news/viewNew.php?id=<?=$new['id']?>"><h3 class = "newsTitle"><?=$new['title']?></h3></a> <span class="created"><?=$new['createDate']?></span>
		<?=$new['content']?>
		<?php
		$new['author'] = new User($new['authorId']);
		$new['authorName'] = $new['author']->firstName . ' ' . $new['author']->lastName;
		?>
		<span>Created by: <?=$new['authorName']?></span>
	</div>
<?php endwhile;?>
</div>

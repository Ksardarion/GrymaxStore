<?php
class Articles {
	public function getArticles(){
		$qForGetting = "SELECT * FROM `articles`";
		$articles = DB::connect()->prepare($qForGetting);
		$articles->execute();
		return $articles;
	}
	public function getCurrentArticle($articleId){
		$qForArticle = "SELECT * FROM `articles` WHERE `id` = ?";
		$artcile = DB::connect()->prepare($qForArticle);
		$artcile->execute(Array($articleId));
		return $artcile;
	}
	static function create($name, $description, $price){
		$sql = "INSERT INTO `articles` (`name`, `description`, `price`) VALUES (?, ?, ?)";
		$res = DB::connect()->prepare($sql);
		$res->execute(Array($name, $description, $price));
		return $res;
	}
	static function delete($articleId){
		$sqlForArticle = "DELETE FROM `articles` WHERE `id` = ? LIMIT 1";
		$res = DB::connect()->prepare($sqlForArticle);
		$res->execute(Array($articleId));
		return $res;
	}
}
?>
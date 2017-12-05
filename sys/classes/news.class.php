<?php

class News{
	public static function getNews(){
		$qForGetting = "SELECT * FROM `news`";
		$news = DB::connect()->prepare($qForGetting);
		$news->execute();
		return $news;
	}
	public static function addNews($title, $content, $author){
		// $date = date('Y-m-d');
		$date = '2017-11-30';
		$sqlCreate = "INSERT INTO `news` (`title`, `content`, `authorId`, `createDate`) VALUES (?, ?, ?, ?)";
		$create = DB::connect()->prepare($sqlCreate);
		$create->execute(Array($title, $content, $author, $date));
		return $create;
	}
	public static function getNew($newId){
	    $sql = "SELECT * FROM `news` WHERE `id` = ?";
	    $getting = DB::connect()->prepare($sql);
	    $getting->execute(Array($newId));
	    return $getting->fetch();
    }
}
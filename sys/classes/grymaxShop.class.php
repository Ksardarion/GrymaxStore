<?php
class grymaxShop{
	public static function saveIndexPageBlocks($title, $description){
		$qForUpdate = "UPDATE `config` SET `aboutCompanyTitle`= ?,`aboutCompany`= ?";
		$res = DB::connect()->prepare($qForUpdate);
		$res->execute(Array($title, $description));
		return $res;
	}
	public static function saveMetaData($indexTitle){
		$qForUpdate = "UPDATE `config` SET `indexTitle`= ?";
		$res = DB::connect()->prepare($qForUpdate);
		$res->execute(Array($indexTitle));
		return $res;
	}
	public static function today(){
	    return date('Y-m-d');
    }
    public static function startMounthPoint(){
        $currYear = date('Y');
        $currMounth = date('m');
        $firstDauOfMounth = '01';
	    return $currYear .'-' . $currMounth . '-' . $firstDauOfMounth;
    }
    public static function endMounthPoint(){
        $currYear = date('Y');
        $currMounth = date('m');
        $lastDayOfMounth = date('t',strtotime('today'));
        return $currYear . '-' . $currMounth . '-'. $lastDayOfMounth;

    }
    public static function getCurrentMounthData($dataType){
        $sql = "SELECT * FROM `" . $dataType . "` WHERE `created` > '" . self::startMounthPoint() ."' AND `created` < '" . self::endMounthPoint() ."'";
        $counter = DB::connect()->prepare($sql);
        $counter->execute();
        return $counter->rowCount();
    }

    public static function addPageView($page){
        $date = date('Y-m-d H:i:s');
        $sql = "INSERT INTO `pagesviews` (`page`, `time`) VALUES (?, ?)";
        $adding = DB::connect()->prepare($sql);
        $adding->execute(Array($page, $date));

    }
    public static function addPageVisitor($ip, $page){
        $date = date('Y-m-d');
        $sql = "INSERT INTO `pagesvisitors` (`visitorip`, `page`, `lastvisittime`) VALUES (?, ?, ?)";
        $adding = DB::connect()->prepare($sql);
        $adding->execute(Array($ip, $page, $date));
    }
    public static function updatePageVisitor($ip, $page){
        $date = date('Y-m-d');
        $sql = "UPDATE `pagesvisitors` SET `lastvisittime` = ?, `page` = ? WHERE `ip` = ?";
        $adding = DB::connect()->prepare($sql);
        $adding->execute(Array($date, $page, $ip));
    }
    public static function getPageVisitor($ip){
        $sql = "SELECT * FROM `pagesvisitors` WHERE `visitorip` = ?";
        $getting = DB::connect()->prepare($sql);
        $getting->execute(Array($ip));
        return $getting->rowCount();
    }
    public static function addToStatistic($ip, $page){
        self::addPageView($page);
        $visitor = self::getPageVisitor($ip);
        if($visitor){
            self::updatePageVisitor($ip, $page);
        } else {
            self::addPageVisitor($ip, $page);
        }
    }
    public static function getCountFromTable($table, $state = ' '){
        $sql = "SELECT `id` FROM `" . $table . "` " . $state;
        $gettnig = DB::connect()->prepare($sql);
        $gettnig->execute();
        return $gettnig->rowCount();
    }

}
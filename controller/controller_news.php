<?php
	$id = isset($_GET["id"])? $_GET["id"]:"";
	$news = fetch_one("select * from tbl_news where pk_news_id=$id");

	$c_category = $news["c_category"];
	$s = explode(",",$c_category);
	$arr_category = array();
	foreach ($s as $rows) {
		# code...
		if ($rows!="")
			$arr_category[] = $rows;
	}
	$arr1 = array();
	foreach ($arr_category as $rows) {
		# code...
		$arr1[] = array($rows);
	}
	
	//tim 1 mang gồm news sao cho có cùng 1 thể loại 
		$arr_num = array();
		$arr = fetch("select c_category,pk_news_id from tbl_news");
		foreach ($arr as $rows) {
			# code...
			if (check($arr1,$rows["c_category"])==1)
				$arr_num[] = $rows["pk_news_id"];
		}
	//truy vấn mang r news mà có id nằm trong $arr_num
	$arr = fetch("select c_name,pk_news_id from tbl_news where pk_news_id IN ( '" . implode($arr_num, "', '") . "' ) order by pk_news_id desc limit 0,8");
	if (isset($news)){
		include "view/view_news.php";
	}
	else
		echo "Đường dẫn sai";
?>
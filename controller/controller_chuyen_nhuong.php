<?php 
	//lấy id từ danh sách cha với 1 cái tên
	$parent_photo = fetch_one("select pk_category_news_parent_id from tbl_category_news_parent where c_name='chuyen nhuong'");
	$id_parent =  $parent_photo["pk_category_news_parent_id"];
	
	//lấy 1 mảng id từ danh sách con có id cha
	$child_photo = fetch("select pk_category_news_child_id from tbl_category_news_child where pk_category_news_parent_id=$id_parent");
	
	//tim 1 mang gồm news sao cho có cùng 1 thể loại 
	$arr_num = array();
	$arr = fetch("select c_category,pk_news_id from tbl_news");
	foreach ($arr as $rows) {
		# code...
		if (check($child_photo,$rows["c_category"])==1)
			$arr_num[] = $rows["pk_news_id"];
	}
	//truy vấn mang r news mà có id nằm trong $arr_num
	$arr = fetch("select * from tbl_news where pk_news_id IN ( '" . implode($arr_num, "', '") . "' ) order by pk_news_id desc limit 0,6");
	include "view/view_chuyen_nhuong.php";
?>
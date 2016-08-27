<?php
    $id_parent =  isset($_GET["id_parent"]) ? $_GET["id_parent"]:"";
    $id_child =  isset($_GET["id_child"]) ? $_GET["id_child"]:"";
    $id_c = $id_child;

    if ($id_child==""){
    	//lay ten
    	$name = fetch_one("select c_name from tbl_category_news_parent where pk_category_news_parent_id=$id_parent");
    	$name_category = $name["c_name"];
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
		$arr = fetch("select * from tbl_news where pk_news_id IN ( '" . implode($arr_num, "', '") . "' ) order by pk_news_id desc");
		$url="index.php/list_news/$id_parent";
		include "view/view_list_news.php";
    }
    else {
    	//lay ten
    	$name = fetch_one("select c_name from tbl_category_news_child where pk_category_news_child_id=$id_child");
    	$name_category = $name["c_name"];
    	$id_child = array (array($id_child) );
    	
		//tim 1 mang gồm news sao cho có cùng 1 thể loại 
		$arr_num = array();
    	$arr = fetch("select c_category,pk_news_id from tbl_news");
		foreach ($arr as $rows) {
			# code...
			if (check($id_child,$rows["c_category"])==1)
				$arr_num[] = $rows["pk_news_id"];
			
		}
		//truy vấn mang r news mà có id nằm trong $arr_num
		$arr = fetch("select * from tbl_news where pk_news_id IN ( '" . implode($arr_num, "', '") . "' ) order by pk_news_id desc");
		$url="index.php/list_news/$id_parent/$id_c";
		include "view/view_list_news.php";
    }
?>
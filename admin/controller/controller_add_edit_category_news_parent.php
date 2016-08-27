<?php
	$act = isset($_GET["act"]) ? $_GET["act"]:"";
	switch ($act) {
		case 'edit':
			# code...
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			$arr = fetch_one("select * from tbl_category_news_parent where pk_category_news_parent_id = $id");
			$form_action = "index.php?controller=add_edit_category_news_parent&act=do_edit&id=$id";
			break;
		case 'do_edit':
			# code...
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			$c_name = $_POST["c_name"];
			$dem = num_rows("select * from tbl_category_news_parent where c_name='$c_name' ");
			if ($dem==0)
				execute("update tbl_category_news_parent set c_name='$c_name' where pk_category_news_parent_id=$id");
			header("location:index.php?controller=category_news_parent");
			break;
			
		case 'add':
			# code...
			$form_action = "index.php?controller=add_edit_category_news_parent&act=do_add";
			break;
		case 'do_add':
				# code...
			$c_name = $_POST["c_name"];
			$dem = num_rows("select * from tbl_category_news_parent where c_name='$c_name' ");
			if ($dem==0)
				execute("insert into tbl_category_news_parent(c_name) value('$c_name')");
			header("location:index.php?controller=category_news_parent");		
			break;	
	}


	include "view/view_add_edit_category_news_parent.php";
?>
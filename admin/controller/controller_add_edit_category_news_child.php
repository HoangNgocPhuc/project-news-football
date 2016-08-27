<?php
	$act = isset($_GET["act"]) ? $_GET["act"]:"";
	switch ($act) {
		case 'edit':
			# code...
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			$arr = fetch_one("select * from tbl_category_news_child where pk_category_news_child_id = $id");
			$arr_parent = fetch("select * from tbl_category_news_parent");
			$form_action = "index.php?controller=add_edit_category_news_child&act=do_edit&id=$id";
			break;
		case 'do_edit':
			# code...
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			$c_name = $_POST["c_name"];
			$c_parent = $_POST["pk"];

			if (num_rows("select * from tbl_category_news_child where c_name='$c_name' and pk_category_news_child_id != $id") <= 0)
			 	execute("update tbl_category_news_child set c_name='$c_name',pk_category_news_parent_id=$c_parent where pk_category_news_child_id=$id");
			 header("location:index.php?controller=category_news_child");
			break;
			
		case 'add':
			# code...
			$arr_parent = fetch("select * from tbl_category_news_parent");
			$form_action = "index.php?controller=add_edit_category_news_child&act=do_add";
			break;
		case 'do_add':
				# code...
			$c_name = $_POST["c_name"];
			$c_parent = $_POST["pk"];
			if (num_rows("select * from tbl_category_news_child where c_name='$c_name'") <= 0)
				execute("insert into tbl_category_news_child(c_name,pk_category_news_parent_id) value('$c_name',$c_parent)");
			header("location:index.php?controller=category_news_child");		
			break;	
	}


	include "view/view_add_edit_category_news_child.php";
?>
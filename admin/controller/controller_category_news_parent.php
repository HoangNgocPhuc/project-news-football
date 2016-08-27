<?php
	$act = isset($_GET["act"]) ? $_GET["act"]:"";
	switch ($act) {
		case 'delete':
			# code...
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			$id = is_numeric($_GET["id"]) ? $_GET["id"]:0;
			
			execute("delete from tbl_category_news_parent where pk_category_news_parent_id = $id");
			header("location:index.php?controller=category_news_parent");
			break;
		
		default:
			# code...
			break;
	}

	$so_ban_ghi_tren_trang = 10;
	$so_ban_ghi = num_rows("select *from tbl_category_news_parent");
	$so_trang = ceil($so_ban_ghi/$so_ban_ghi_tren_trang);
	$tu_ban_ghi = isset($_GET["p"]) ? (($_GET["p"]-1)*$so_ban_ghi_tren_trang):0;

	$arr = fetch("select * from tbl_category_news_parent limit $tu_ban_ghi,$so_ban_ghi_tren_trang");
	include "view/view_category_news_parent.php";
?>
<?php
	//controller
	$act = "";
	$act = isset($_GET["act"])?$_GET["act"]:"";
	switch($act){
		case "delete":
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			execute("delete from tbl_user_admin where $id=pk_user_id");
			header("location:index.php?controller=user");
			break;	
	}
	//---------------
	//phan trang
	$so_ban_ghi_tren_trang = 20;
	$tong_so_ban_ghi = num_rows("select pk_user_id from tbl_user_admin");	
	$so_trang = ceil($tong_so_ban_ghi/$so_ban_ghi_tren_trang);
	$tu_ban_ghi = isset($_GET["p"])? (($_GET["p"]-1)*$so_ban_ghi_tren_trang):0;	
	//---------------	
	$arr = fetch("select * from tbl_user_admin limit $tu_ban_ghi,$so_ban_ghi_tren_trang");
	//load view
	include "view/view_user.php";
?>
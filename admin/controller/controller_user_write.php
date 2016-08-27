<?php
	//controller
	$act = "";
	$act = isset($_GET["act"])?$_GET["act"]:"";
	switch($act){
		case "delete":
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			//delete image from local folder
			$arr_img = fetch_one("select c_img from tbl_user_write where pk_user_write_id=$id");
			if(file_exists("../".$arr_img["c_img"]))
				unlink("../".$arr_img["c_img"]);
			//xoa trong database php
			execute("delete from tbl_user_write where $id=pk_user_write_id");
			header("location:index.php?controller=user_write");
			break;	
	}
	//---------------
	//phan trang
	$so_ban_ghi_tren_trang = 20;
	$tong_so_ban_ghi = num_rows("select pk_user_write_id from tbl_user_write");	
	$so_trang = ceil($tong_so_ban_ghi/$so_ban_ghi_tren_trang);
	$tu_ban_ghi = isset($_GET["p"])? (($_GET["p"]-1)*$so_ban_ghi_tren_trang):0;	
	//---------------	
	$arr = fetch("select * from tbl_user_write order by pk_user_write_id desc limit $tu_ban_ghi,$so_ban_ghi_tren_trang");
	
	//load view
	include "view/view_user_write.php";
?>
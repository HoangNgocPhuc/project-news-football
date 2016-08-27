<?php
	$act = isset($_GET["act"]) ? $_GET["act"]:"";
	switch ($act) {
		case 'edit':
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			$id = is_numeric($_GET["id"]) ? $_GET["id"]:0;
			//lay thong tin ve adv co id truyen vao
			$arr = fetch_one("select * from tbl_adv where pk_adv_id=$id");
			$form_action = "index.php?controller=add_edit_adv&act=do_edit&id=$id";
			include "view/view_add_edit_adv.php";
			break;

		case 'do_edit':
			# code...
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			$id = is_numeric($_GET["id"]) ? $_GET["id"]:0;
			$c_url = $_POST["c_url"];
			
			execute("update tbl_adv set c_url='$c_url' where pk_adv_id=$id");

			//load file img
				//echo  $_FILES["c_img"]["name"];
			if (isset($_FILES["c_img"]["name"]) && $_FILES["c_img"]["name"]!= ""){
				//delete anh tu folder
				$arr_img = fetch_one("select c_img from tbl_adv where pk_adv_id=$id");
				if (file_exists("../".$arr_img['c_img']))
					unlink("../".$arr_img['c_img']);

				$c_img = $_FILES["c_img"]["name"];
				$c_img = "public/upload/adv/".time().$c_img;
				//thuc hien upload
				move_uploaded_file($_FILES["c_img"]["tmp_name"], "../".$c_img );
				//update thong tin vao CSDL
				execute("update tbl_adv set c_img='$c_img' where pk_adv_id=$id");
			}
			//end load file img
			
			header("location:index.php?controller=adv");
			break;

		case 'add':
			# code...
			$form_action = "index.php?controller=add_edit_adv&act=do_add";
			include "view/view_add_edit_adv.php";
			break;
		case 'do_add':
			$c_url = $_POST["c_url"];
			//upload images
			$c_img = "";
			if(isset($_FILES["c_img"]["name"])){
				$c_img = $_FILES["c_img"]["name"];
				$c_img = "public/upload/adv/".time().$c_img;
				//thuc hien upload
				move_uploaded_file($_FILES["c_img"]["tmp_name"], "../".$c_img);
				//update thong tin vao csdl
			//	execute("update tbl_adv set c_img='$c_img' where pk_adv_id=$id");
			}
			//-----------
			
			execute("insert into tbl_adv(c_url,c_img) values('$c_url','$c_img')");
			header("location:index.php?controller=adv");
			break;	
	}
?>
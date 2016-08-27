<?php
	$act = isset($_GET["act"]) ? $_GET["act"]:"";
	switch ($act) {
		case 'edit':
			# code...
			$id = (isset($_GET["id"]) && is_numeric($_GET["id"])) ? $_GET["id"]:0;
			$arr = fetch_one("select * from tbl_user_admin where pk_user_id=$id");
			$form_action = "index.php?controller=add_edit_user&act=do_edit&id=$id";
			break;
		case "do_edit":
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			$username = isset($_POST["c_username"]) ? $_POST["c_username"]:"";
			$old_password = md5(isset($_POST["c_old_password"]) ? $_POST["c_old_password"]:"");
			$new_password = md5(isset($_POST["c_new_password"]) ? $_POST["c_new_password"]:"");

			//kiem tra xem user da ton tai trong csdl chua
			if (num_rows("select * from tbl_user_admin where c_username='$username' and pk_user_id != $id")>0){

				header("location: index.php?controller=add_edit_user&act=edit&id=$id");
			}
			elseif (fetch_one("select * from tbl_user_admin where pk_user_id=$id")["c_password"] != ($old_password)) {
				# code...
				header("location: index.php?controller=add_edit_user&act=edit&id=$id");
			}
			else {
				execute("update tbl_user_admin set c_username='$username',c_password='$new_password' where pk_user_id=$id");
				header("location:index.php?controller=user");
			}

			break;


		case "add":
			$form_action = "index.php?controller=add_edit_user&act=do_add";
			break;
		case "do_add":
			$username = isset($_POST["c_username"]) ? $_POST["c_username"]:"";
			$password = md5(isset($_POST["c_password"]) ? $_POST["c_password"]:"");
			if(num_rows("select c_username from tbl_user_admin where c_username='$username' ") <= 0)
				execute("insert into tbl_user_admin(c_username,c_password) value('$username','$password')");
			header("location:index.php?controller=user");
			break;
	}
	include "view/view_add_edit_user.php";
?>
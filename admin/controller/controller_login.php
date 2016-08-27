<?php
	//load controller
	if ($_SERVER["REQUEST_METHOD"]=="POST"){
		$username = isset($_POST["c_username"]) ? $_POST["c_username"]:"";
		$password = isset($_POST["c_password"]) ? $_POST["c_password"]:"";
		$arr = fetch_one("select c_password from tbl_user_admin where c_username='$username'");
		if (isset($arr)){
			if (md5($password) == $arr["c_password"]){
				$_SESSION["c_username"] = $username;
				header("location: index.php");
			}
			else
				header("location: index.php");

		}
	}
	//load view
	include "view/view_login.php";
?>
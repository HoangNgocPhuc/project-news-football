<?php
	if ($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["login"])){
		$c_name = $_POST["c_username"];
	}
	include "view/view_login.php";
?>
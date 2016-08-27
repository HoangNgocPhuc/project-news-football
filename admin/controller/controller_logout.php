<?php
	if (isset($_SESSION["c_username"])){
		unset($_SESSION["c_username"]);
		header("location:index.php");
	}
?>
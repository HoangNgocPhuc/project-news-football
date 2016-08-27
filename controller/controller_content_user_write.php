<?php
	$id = $_GET["id"];
	$news = fetch_one("select * from tbl_user_write where pk_user_write_id=$id");
	include "view/view_content_user_write.php";
?>
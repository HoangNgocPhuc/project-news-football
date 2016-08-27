<?php
	$search = $_POST["search1"];
	$arr = fetch("select * from tbl_news where c_name LIKE '%$search%' OR c_content LIKE '%$search%' ");
	include "view/view_go.php";
?>
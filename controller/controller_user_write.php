<?php

	$arr = fetch("select * from tbl_user_write order by pk_user_write_id desc limit 0,3");
	include "view/view_user_write.php";
?>
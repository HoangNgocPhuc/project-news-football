<?php
	$arr = fetch("select * from tbl_user_write order by pk_user_write_id desc");
	include "view/view_list_user_write.php";
?>
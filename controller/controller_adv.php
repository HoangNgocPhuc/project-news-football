<?php
	$arr = fetch("select * from tbl_adv order by pk_adv_id desc limit 0,2");
	include "view/view_adv.php";
?>
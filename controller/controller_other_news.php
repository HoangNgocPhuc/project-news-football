<?php
	$arr = fetch("select * from tbl_news order by pk_news_id desc limit 7,6");
	include "view/view_other_news.php";
?>
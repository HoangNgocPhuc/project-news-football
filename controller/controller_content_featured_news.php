<?php
	$a = fetch_one("select * from tbl_featured_news order by pk_featured_news_id desc limit 0,1");

	include "view/view_content_featured_news.php";
?>
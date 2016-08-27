<?php 
	$arr = fetch("select c_name,c_img,pk_news_id from tbl_news order by pk_news_id desc limit 0,10 ");
	include "view/view_news_scroll.php";
?>
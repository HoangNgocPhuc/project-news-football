<div class="news">
	
	<div class="title"><a href="index.php/content_featured_news/<?php echo $a['pk_featured_news_id']; ?>"><?php echo $a["c_name"]; ?></a>
	</div>
	<div class="content"><?php echo $a["c_content"]; ?></div>
	<hr>
	<!-- nut like -->
	<div class="fb-like" data-href="http://localhost/project_devpro/index.php/content_featured_news/<?php echo $a['pk_featured_news_id']; ?>" data-layout="standard" data-action="like" data-size="small"  data-share="true"></div>
	<!-- comment -->
    <div class="fb-comments" data-href="http://localhost/project_devpro/index.php/content_featured_news/<?php echo $a['pk_featured_news_id']; ?>" data-numposts="5" data-width:="1000px"></div>
    <!-- end comment -->
    <div class="content-main" >
    <!-- end nut like -->
</div>
<div class="news">
	
	<div class="title"><a href="index.php/news/<?php echo $news['pk_news_id']; ?>"><?php echo $news["c_name"]; ?></a></div>
	<div class="content"><?php echo $news["c_content"]; ?></div>
	<hr>
	<!-- nut like -->
	<div class="fb-like" data-href="http://localhost/project_devpro/index.php/news/<?php echo $news['pk_news_id']; ?>" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
	<!-- comment -->
    <div class="fb-comments" data-href="http://localhost/project_devpro/index.php/news/<?php echo $news['pk_news_id']; ?>" data-numposts="5" data-width:="1000px"></div>
    <!-- end comment -->
    <div class="content-main" >
    <!-- end nut like -->
	<div class="tin-lien-quan">
		<p style>Tin liên quan >></p>
		<ul>
			<?php
			foreach ($arr  as $rows) {
					# code...	
			?>
				<li><a href="index.php/news/<?php  echo $rows['pk_news_id']; ?>"><?php echo $rows["c_name"] ?></a></li>
			<?php } ?>
		</ul>
	</div>
</div>
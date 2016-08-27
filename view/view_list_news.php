<div class="content-bot" style="margin-top:-30px">
    <div class="form">
            <div class="title"><a href="<?php echo $url; ?>"><?php echo mb_strtoupper($name_category,"UTF8"); ?></a></div>
            <?php 
                foreach ($arr as $rows) {
                    # code...
            ?>
                <div class="tin-tren">
                <a href="index.php/news/<?php echo $rows['pk_news_id']; ?>" class="link-image"><img style="width:110px; height:80px" src="<?php echo $rows["c_img"]; ?>"></a>
                <a style="font-size:19px;" href="index.php/news/<?php echo $rows['pk_news_id']; ?>" class="link"><?php echo $rows["c_name"]; ?></a>
            </div> 
            <?php } ?>
       </div>
</div>
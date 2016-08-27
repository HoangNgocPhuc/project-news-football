<div class="content-center-photo">
                    <div class="title">Photo mới</div>
                    <?php 
                        foreach ($arr as $rows) {
                            # code...
                    ?> 
                    <div class="tin">
                        <a href="index.php/news/<?php echo $rows['pk_news_id']; ?>" class="link-image"><img style="width:114px; height:74px" src="<?php echo $rows['c_img']; ?>"></a>
                        <a href="index.php/news/<?php echo $rows['pk_news_id']; ?>" class="link"><?php echo $rows["c_name"]; ?></a>
                    </div> 
                    <?php } ?>
                </div>
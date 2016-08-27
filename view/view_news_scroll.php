<div class="title">Tin mới nhất</div>
                <div class="scroll">
                    <?php 
                        foreach ($arr as $rows) {
                            # code...
                        
                    ?>  
                    <div class="tin">
                        <a href="index.php/news/<?php echo $rows['pk_news_id']; ?>" class="link-image"><img src="<?php echo $rows['c_img']; ?>"></a>
                        <a href="index.php/news/<?php echo $rows['pk_news_id']; ?>" class="link"><?php echo $rows["c_name"]; ?></a>
                    </div>
                    <?php } ?>        
                </div>
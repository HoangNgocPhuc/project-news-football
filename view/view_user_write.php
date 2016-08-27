<div class="content-center-video">
                    <div class="title">Bạn đọc</div>
                     
                     <?php 
                        foreach ($arr as $rows) {
                            # code...
                     ?> 
                    <div class="tin">
                        <a href="index.php/content-user-write/<?php echo $rows['pk_user_write_id']; ?>" class="link-image"><img src="<?php echo $rows['c_img']; ?>"></a>
                        <a href="index.php/content-user-write/<?php echo $rows['pk_user_write_id']; ?>" class="link"><?php echo $rows["c_name"]; ?></a>
                    </div>
                     <?php } ?>
                </div>
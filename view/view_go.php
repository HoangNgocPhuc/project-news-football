<div class="content-bot" style="margin-top:-30px">
    <div class="form">
        <div class="title" style="color:white; font-size:20px">Kết quả tìm kiếm với >> <span style="color:red"><?php echo $search; ?></span></div>
        <?php
        if (num_rows("select * from tbl_news where c_name LIKE '%$search%' OR c_content LIKE '%$search%' ")==0)
        {
        ?>
            <div style="text-align:center; margin-top:20px">Không tìm thấy kết quả nào</div>
        <?php } ?>
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
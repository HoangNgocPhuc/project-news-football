<div class="form">
            <div class="title"><a href="index.php/list-user-write">Bài Viết Bạn Đọc</a></div>
            <div class="tin-tren">
                <a href="index.php/content-user-write/<?php echo $arr[0]['pk_user_write_id']; ?>" class="link-image"><img style="width:110px; height:80px" src="<?php echo $arr[0]["c_img"]; ?>"></a>
                <a href="index.php/content-user-write/<?php echo $arr[0]['pk_user_write_id']; ?>" class="link"><?php echo $arr[0]["c_name"]; ?></a>
            </div> 
             <div class="tin-duoi-trai">
                <a href="index.php/content-user-write/<?php echo $arr[1]['pk_user_write_id']; ?>" class="link-image"><img style="width:110px; height:80px" src="<?php echo $arr[1]["c_img"]; ?>"></a>
                <a href="index.php/content-user-write/<?php echo $arr[1]['pk_user_write_id']; ?>" class="link"><?php echo $arr[1]["c_name"]; ?></a>
            </div> 
             <div class="tin-duoi-phai">
                <a href="index.php/content-user-write/<?php echo $arr[2]['pk_user_write_id']; ?>" class="link-image"><img style="width:110px; height:80px" src="<?php echo $arr[2]["c_img"]; ?>"></a>
                <a href="index.php/content-user-write/<?php echo $arr[2]['pk_user_write_id']; ?>" class="link"><?php echo $arr[2]["c_name"]; ?></a>
            </div>   
            <div style="clear:both"></div>
            <ul style="background:white; margin-top:10px; padding-top:10px; padding-bottom:20px;;">
                <li><a href="index.php/content-user-write/<?php echo $arr[3]['pk_user_write_id']; ?>"><?php echo $arr[3]["c_name"]; ?></a></li>
                <li><a href="index.php/content-user-write/<?php echo $arr[4]['pk_user_write_id']; ?>"><?php echo $arr[4]["c_name"]; ?></a></li>
                <li><a href="index.php/content-user-write/<?php echo $arr[5]['pk_user_write_id']; ?>"><?php echo $arr[5]["c_name"]; ?></a></li>
            </ul>
       </div>
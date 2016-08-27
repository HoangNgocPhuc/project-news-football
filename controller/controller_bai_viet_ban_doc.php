<?php
    $arr = fetch("select * from tbl_user_write order by pk_user_write_id desc limit 0,6");
    include "view/view_bai_viet_ban_doc.php";
?>
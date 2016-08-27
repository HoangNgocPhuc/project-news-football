        <div class="menu-botton">
            	<ul>
                    
                   <?php
                        foreach ($arr_parent as $rows) {
                            # code...
                            $num = $rows['pk_category_news_parent_id'];
                            $arr_child = fetch("select * from tbl_category_news_child where pk_category_news_parent_id=$num");
                   ?>
                   <li><a href="index.php/list_news/<?php echo $rows['pk_category_news_parent_id']; ?>"><?php echo mb_strtoupper($rows["c_name"],"UTF8"); ?></a>
                        <?php
                            if (count($arr_child)>0){
                        ?>
                        <ul>
                            <?php
                             foreach ($arr_child as $row) {
                                 # code...
                            
                            ?>
                              <li><a href="index.php/list_news/<?php echo $rows['pk_category_news_parent_id']; ?>/<?php echo $row['pk_category_news_child_id']; ?>"><?php echo ($row["c_name"]); ?></a></li>
                            <?php } ?>
                        </ul>  
                        <?php } ?>
                   </li>
                   <?php } ?>
                </ul>
            </div>

           
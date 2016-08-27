<div class="col-md-10 col-xs-offset-1">
  <div style="margin-bottom:5px;">
    <a href="index.php?controller=add_edit_category_news_child&act=add" class="btn btn-primary">Add</a>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading">category_news_child</div>
    <div class="panel-body">
      <table cellpadding="5" class="table table-hover table-bordered">
        <tr>
          <th style="width:50px;">STT</th>
          <th style="width:120px;">Name</th>
          <th style="width:120px;">Thuộc thể loại</th>
          <th style="width:100px;"></th>
        </tr>
      <?php
        $stt = 0;
        foreach($arr as $rows)
        {
          $stt++;
      ?>
        <tr>
          <td style="text-align:center"><?php echo $stt;?></td>
          <td><?php echo $rows["c_name"]; ?></td>
          <td><?php 
              $num = $rows['pk_category_news_parent_id'];
              $arr_parent = fetch_one("select c_name from tbl_category_news_parent where pk_category_news_parent_id=$num");
              echo $arr_parent["c_name"];
          ?></td>
          <td style="text-align:center">
            <a href="index.php?controller=add_edit_category_news_child&act=edit&id=<?php echo $rows["pk_category_news_child_id"];?>">Edit</a>
            &nbsp;&nbsp;
            <a href="index.php?controller=category_news_child&act=delete&id=<?php echo $rows["pk_category_news_child_id"];?>" onclick="return window.confirm('Are you sure?');">Delete</a>
          </td>
        </tr>
      <?php } ?>
      </table>
    <style type="text/css">
      .pagination{padding: 0px; margin: 0px;}
    </style>
    <ul class="pagination">
      <li>
        <a href="#">Page</a>
      </li>
      <?php
        for($i = 1; $i<= $so_trang; $i++)
        {
      ?>
      <li>
        <a href="index.php?controller=category_news_child&p=<?php echo $i;?>"><?php echo $i;?></a>
      </li>
      <?php } ?>
    </ul>
    </div>
  </div>
</div>
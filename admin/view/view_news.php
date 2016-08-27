<div class="col-md-10 col-xs-offset-1">
	<div style="margin-bottom:5px;">
		<a href="index.php?controller=add_edit_news&act=add" class="btn btn-primary">Add</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">news</div>
		<div class="panel-body">
			<table cellpadding="5" class="table table-hover table-bordered">
				<tr>
					<th style="width:50px">STT</th>
					<th style="width:100px">Ảnh</th>
					<th>Tiêu đề</th>
					<th>Thuộc thể loại</th>
					<th style="width:100px"></th>
				</tr>
				<?php
					$stt = 0;
					foreach ($arr as $rows) {
						# code...
						$stt++;
				?>
				<tr>
					<td style="text-align:center"><?php echo $stt;  ?></td>
					<td style="text-align:center">
						<?php
							if (isset($rows["c_img"])){
						?>
						<img src="../<?php echo $rows["c_img"]; ?>" style="width:50px" >
						<?php } ?>
					</td>
					<td><?php echo $rows["c_name"]; ?></td>
					<td><?php 
						$s = $rows["c_category"];
						$arr_string = explode(",", $s);
						foreach ($arr_string as $value) {
							# code...
							if ($value!=""){
							$value = (int)$value;
							$a = fetch_one("select c_name from tbl_category_news_child where pk_category_news_child_id=$value");
							echo $a["c_name"] . " , ";}
						}
					?></td>
					<td style="text-align:center">
						<a href="index.php?controller=add_edit_news&act=edit&id=<?php echo $rows["pk_news_id"];?>">Edit</a>
						&nbsp;&nbsp;
						<a href="index.php?controller=news&act=delete&id=<?php echo $rows["pk_news_id"];?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
				<a href="index.php?controller=news&p=<?php echo $i;?>"><?php echo $i;?></a>
			</li>
			<?php } ?>
		</ul>
		</div>
	</div>
</div>
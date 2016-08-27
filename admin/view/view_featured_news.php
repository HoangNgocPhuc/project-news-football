<div class="col-md-10 col-xs-offset-1">
	<div style="margin-bottom:5px;">
		<a href="index.php?controller=add_edit_featured_news&act=add" class="btn btn-primary">Add</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">featured_news</div>
		<div class="panel-body">
			<table cellpadding="5" class="table table-hover table-bordered">
				<tr>
					<th style="width:50px;">STT</th>
					<th style="width:50px;">image</th>
					<th style="width:250px">featured_news name</th>
					<th style="">Description</th>
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
					<td style="text-align:center;">
						<?php
							if (isset($rows["c_img"])){
						?>
						<img src="../<?php echo $rows["c_img"]; ?>" style="width:50px" >
						<?php } ?>
					</td>
					<td><?php echo $rows["c_name"];?></td>
					<td style="text-align:center;"><?php echo $rows["c_description"];?></td>
					<td style="text-align:center">
						<a href="index.php?controller=add_edit_featured_news&act=edit&id=<?php echo $rows["pk_featured_news_id"];?>">Edit</a>
						&nbsp;&nbsp;
						<a href="index.php?controller=featured_news&act=delete&id=<?php echo $rows["pk_featured_news_id"];?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
				<a href="index.php?controller=featured_news&p=<?php echo $i;?>"><?php echo $i;?></a>
			</li>
			<?php } ?>
		</ul>
		</div>
	</div>
</div>
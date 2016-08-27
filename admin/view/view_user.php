<div class="col-md-8 col-xs-offset-2">
	<div style="margin-bottom:5px;">
		<a href="index.php?controller=add_edit_user&act=add" class="btn btn-primary">Add</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">User</div>
		<div class="panel-body">
			<table cellpadding="5" class="table table-hover table-bordered">
				<tr>
					<th style="width:50px; text-align:center">STT</th>
					<th style="width:100px; text-align:center">Username</th>
					<th style="width:100px; text-align:center"></th>
				</tr>
			<?php
				$stt = 0;
				foreach($arr as $rows)
				{
					$stt++;
			?>
				<tr>
					<td style="text-align:center"><?php echo $stt;?></td>
					<td style="width:100px; text-align:center"><?php echo $rows["c_username"];?></td>
					<td style="text-align:center">
						<a href="index.php?controller=add_edit_user&act=edit&id=<?php echo $rows["pk_user_id"]; ?>">Edit</a>
						&nbsp;&nbsp;
						<a href="index.php?controller=user&act=delete&id=<?php echo $rows["pk_user_id"];?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
				<a href="index.php?controller=user&p=<?php echo $i;?>"><?php echo $i;?></a>
			</li>
			<?php } ?>
		</ul>
		</div>
	</div>
</div>
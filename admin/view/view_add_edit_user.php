<div class="col-md-6 col-xs-offset-3">
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit user admin</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_action;?>">
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Username</div>
				<div class="col-md-9">
					<input type="text" name="c_username" class="form-control" required value="<?php echo isset($arr["c_username"])?$arr["c_username"]:"";?>">
				</div>
			</div>
			<!-- end row -->
			<?php
				if ($act=="edit" || $act=="do_edit"){
			?>
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Old Password</div>
				<div class="col-md-9">
					<input type="password" name="c_old_password" class="form-control" required>
				</div>
			</div>
			<!-- end row -->
			<?php } ?>
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">New Password</div>
				<div class="col-md-9">
					<input type="password" name="c_new_password" class="form-control" required>
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<input type="submit" value="Process" class="btn btn-primary">
					<input type="reset" value="Reset" class="btn btn-danger">
				</div>
			</div>
			<!-- end row -->
			</form>
		</div>
	</div>
</div>
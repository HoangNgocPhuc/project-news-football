<div class="col-md-6 col-xs-offset-3">
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit category_news_parent</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_action;?>">
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-5">category_new_parent_name</div>
				<div class="col-md-7">
					<input type="text" name="c_name" class="form-control" required value="<?php echo isset($arr["c_name"])?$arr["c_name"]:"";?>">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-5"></div>
				<div class="col-md-7">
					<input type="submit" value="Process" class="btn btn-primary">
					<input type="reset" value="Reset" class="btn btn-danger">
				</div>
			</div>
			<!-- end row -->
			</form>
		</div>
	</div>
</div>
<div class="col-md-10 col-xs-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit adv</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_action;?>" enctype="multipart/form-data">
				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-3">Link</div>
					<div class="col-md-9">
						<input type="text" name="c_url" class="form-control" required value="<?php echo isset($arr["c_url"])? $arr["c_url"]:"";?>">
					</div>
				</div>
				<!-- end row -->

				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-3">Image</div>
					<div class="col-md-9">
						<input type="file" name="c_img">
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
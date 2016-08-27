<div class="col-md-10 col-xs-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit featured_news</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_action;?>" enctype="multipart/form-data">
				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-3">featured_news name</div>
					<div class="col-md-9">
						<input type="text" name="c_name" class="form-control" required value="<?php echo isset($arr["c_name"])?$arr["c_name"]:"";?>">
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-3">Description</div>
					<div class="col-md-9">
						<textarea name="c_description" class="form-control"><?php echo isset($arr["c_description"])?$arr["c_description"]:"";?></textarea>
					</div>
				</div>
				<!-- end row -->

				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-3">Content</div>
					<div class="col-md-9">
						<textarea name="c_content"><?php echo isset($arr["c_content"])?$arr["c_content"]:"";?></textarea>
						<script type="text/javascript">
							CKEDITOR.replace("c_content");
						</script>
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
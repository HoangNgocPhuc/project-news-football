<div class="col-md-6 col-xs-offset-3">
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit category_news_child</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_action;?>">
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Tên thể loại</div>
				<div class="col-md-9">
					<input type="text" name="c_name" class="form-control" required value="<?php echo isset($arr["c_name"])?$arr["c_name"]:"";?>">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Thuộc thể loại</div>
				<div class="col-md-9">
					<select name="pk">
					<?php 
						foreach ($arr_parent as $rows) {
							# code...
					?>
						<option value="<?php echo $rows['pk_category_news_parent_id'];?>"
						<?php echo isset($arr) &&($arr["pk_category_news_parent_id"]==$rows["pk_category_news_parent_id"]) ? "selected":""; ?>
						><?php echo $rows["c_name"]; ?></option>
					<?php } ?>
					</select>
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
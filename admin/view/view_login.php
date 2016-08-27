<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top:30px;">
	<div class="col-md-4 col-xs-offset-4">
		<div class="panel panel-primary">
			<div class="panel-heading">Login</div>
			<div class="panel-body">
				<form method="post" action="">
					<!-- rows -->
					<div class="row" style="margin-top:5px;">
						<div class="col-md-3">
							Username
						</div>
						<div class="col-md-9">
							<input type="text" name="c_username" class="form-control" required>
						</div>
					</div>
					<!-- end rows -->
					<!-- rows -->
					<div class="row" style="margin-top:5px;">
						<div class="col-md-3">
							Password
						</div>
						<div class="col-md-9">
							<input type="password" name="c_password" class="form-control" required>
						</div>
					</div>
					<!-- end rows -->
					<!-- rows -->
					<div class="row" style="margin-top:5px;">
						<div class="col-md-3">
							
						</div>
						<div class="col-md-9">
							<input type="submit" value="Login" class="btn btn-primary">
							<input type="reset" value="Reset" class="btn btn-danger">
						</div>
					</div>
					<!-- end rows -->
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>